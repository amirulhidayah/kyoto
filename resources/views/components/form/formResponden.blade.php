<form id="{{$form_id}}" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($method) && $method == 'PUT')
        @method('PUT')
    @endif

    <div class="row">
        
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            {{-- Kartu Keluarga --}}
            @component('components.formGroup.input', ['label' => 'Nomor Kartu Keluarga', 'type' => 'text', 'class' => 'angka', 'id' => 'kartu-keluarga', 'name' => 'kartu_keluarga', 'placeholder' => 'Masukkan', 'value' => $responden->kartu_keluarga ?? null])
            @endcomponent
        </div>
    </div>

    {{-- alamat --}}
    @component('components.formGroup.textArea', ['label' => 'Alamat', 'class' => '', 'id' => 'alamat', 'name' => 'alamat', 'placeholder' => 'Masukkan', 'value' => $responden->alamat ?? null])
    @endcomponent

    <div class="row">
        <div class="col-lg-6 col-md-6">
            {{-- Provinsi --}}
            @component('components.formGroup.select', [
                'label' => 'Provinsi',
                'name' => 'provinsi',
                'id' => 'provinsi',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
        <div class="col-lg-6 col-md-6">
            {{-- Kabupaten / Kota --}}
            @component('components.formGroup.select', [
                'label' => 'Kabupaten / Kota',
                'name' => 'kabupaten_kota',
                'id' => 'kabupaten-kota',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
        <div class="col-lg-6 col-md-6">
            {{-- Kecamatan --}}
            @component('components.formGroup.select', [
                'label' => 'Kecamatan',
                'name' => 'kecamatan',
                'id' => 'kecamatan',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
        <div class="col-lg-6 col-md-6">
            {{-- Desa / Kelurahan --}}
            @component('components.formGroup.select', [
                'label' => 'Desa / Kelurahan',
                'name' => 'desa_kelurahan',
                'id' => 'desa-kelurahan',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
    </div>

    <div class="row">
        <div class="col-lg col-md">
            {{-- Nomor HP --}}
            @component('components.formGroup.input', ['label' => 'Nomor HP (Optional)', 'type' => 'text', 'class' => 'angka', 'id' => 'nomor-hp', 'name' => 'nomor_hp', 'placeholder' => 'Masukkan', 'value' => $responden->nomor_hp ?? null])
            @endcomponent
        </div>
    </div>

    {{-- Submit --}}
    <div class="form-row mt-2">
        <div class="form-group ml-auto">
            @component('components.buttons.submit', ['label' => 'Simpan'])
            @endcomponent
        </div>
    </div>
</form>


@push('script')
<script>
    $(function() {
        $('#kabupaten-kota').attr('disabled', true);
        $('#kecamatan').attr('disabled', true);
        $('#desa-kelurahan').attr('disabled', true);

        fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
            .then(provinces => $.each(provinces, function(key, val) {   
                if (val.id == '{{ $responden->provinsi ?? null }}' ) {
                    $('#provinsi').append(`<option value="${val.id}" selected>${val.name}</option>`);
                    $('#provinsi').trigger('change');
                } else {
                    $('#provinsi').append(`<option value="${val.id}">${val.name}</option>`);
                } 
            })
        );

        $("#provinsi").change(function() {
            if($("#provinsi").val() != ''){
                $("#kabupaten-kota").html('');
                $("#kabupaten-kota").append('<option value="">- Pilih Salah Satu -</option>')
                $('#kabupaten-kota').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/regencies/`+$("#provinsi").val()+`.json`)
                .then(response => response.json())
                    .then(regencies => $.each(regencies, function(key, val) {
                        if (val.id == '{{ $responden->kabupaten_kota ?? null }}' ) {
                            $('#kabupaten-kota').append(`<option value="${val.id}" selected>${val.name}</option>`);
                            $('#kabupaten-kota').trigger('change');
                        } else {
                            $('#kabupaten-kota').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    })
                );
            }
        });

        $("#kabupaten-kota").change(function() {
            if($("#kabupaten-kota").val() != ''){
                $("#kecamatan").html('');
                $("#kecamatan").append('<option value="">- Pilih Salah Satu -</option>')
                $('#kecamatan').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/`+$("#kabupaten-kota").val()+`.json`)
                .then(response => response.json())
                    .then(districts => $.each(districts, function(key, val) {
                        if(val.id == '{{ $responden->kecamatan ?? null }}' ) {
                            $('#kecamatan').append(`<option value="${val.id}" selected>${val.name}</option>`);
                            $('#kecamatan').trigger('change');
                        } else {
                            $('#kecamatan').append(`<option value="${val.id}">${val.name}</option>`);
                        } 
                    })
                );
            }
        });

        $("#kecamatan").change(function() {
            if($("#kecamatan").val() != ''){
                $("#desa-kelurahan").html('');
                $("#desa-kelurahan").append('<option value="">- Pilih Salah Satu -</option>')
                $('#desa-kelurahan').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/villages/`+$("#kecamatan").val()+`.json`)
                .then(response => response.json())
                    .then(villages => $.each(villages, function(key, val) {
                        if(val.id == '{{ $responden->desa_kelurahan ?? null }}' ) {
                            $('#desa-kelurahan').append(`<option value="${val.id}" selected>${val.name}</option>`);
                        } else {
                            $('#desa-kelurahan').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    })
                );
            }
        });

        $('#{{$form_id}}').submit(function(e) {
            // $("#overlay").fadeIn(100);
            e.preventDefault();
            $('.error-text').text('');
            var formData = new FormData(this)
            $.ajax({
                type: "POST",
                url: "{{$action}}",
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                data: formData,
                cache : false,
                processData: false,
                contentType: false,
                success: function (data) {
                    $("#overlay").fadeOut(100);
                    if ($.isEmptyObject(data.error)) {
                    // console.log(data);
                        if('{{$method}}' == 'PUT') {
                            swal({
                                title: "Berhasil!",
                                text: "Perubahan berhasil disimpan!",
                                icon: "success",
                                button: false
                            })
                        } else{
                            swal({
                                title: "Berhasil!",
                                text: "Data berhasil disimpan!",
                                icon: "success",
                                button: false
                            })
                        }
                        setTimeout(
                        function () {
                            window.location.href = "{{$back_url}}";
                        }, 2000);
                    
                    }
                    else{
                        swal({
                            title: "Terjadi Kesalahan!",
                            text: "Data gagal disimpan, silahkan cek kembali inputan anda.",
                            icon: "error",
                        });
                        printErrorMsg(data.error);
                        if('{{$method}}' == 'PUT') {
                            $('#user-id').attr('disabled', true);
                        }
                    }
                },
            })

        })

        const printErrorMsg = (msg) => {
            $.each(msg, function (key, value) {
                $('.' + key + '-error').text(value);
            });
        }
    });

</script>
@endpush