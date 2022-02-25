<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespondenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'kartu_keluarga' => 72060907099700001,
                'alamat' => 'Laki-laki',
                'provinsi_id' => 73,
                'kabupaten_kota_id' => 7373,
                'kecamatan_id' => 7373020,
                'desa_kelurahan_id' => 7373020003,
                'nomor_hp' => '082298979292',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'kartu_keluarga' => 88960907099700788,
                'alamat' => 'Laki-laki',
                'provinsi_id' => 72,
                'kabupaten_kota_id' => 7203,
                'kecamatan_id' => 7203041,
                'desa_kelurahan_id' => 7203041003,
                'nomor_hp' => '082299078787',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'kartu_keluarga' => 66770907099705432,
                'alamat' => 'Laki-laki',
                'provinsi_id' => 73,
                'kabupaten_kota_id' => 7313,
                'kecamatan_id' => 7313120,
                'desa_kelurahan_id' => 7313120006,
                'nomor_hp' => '082299078787',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            
        ];
        
        DB::table('responden')->insert($data);
    }
}
