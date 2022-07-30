<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'institusi_id' => 1,
                'nama_lengkap' => 'Administrator',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Palopo',
                'tanggal_lahir' => '1997-09-07',
                'alamat' => 'Jl. Palopo',
                'provinsi' => 73,
                'kabupaten_kota' => 7373,
                'kecamatan' => 7373020,
                'desa_kelurahan' => 7373020003,
                'nomor_hp' => '081212121212',
                'email' => 'inosuke@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'institusi_id' => 1,
                'nama_lengkap' => 'Inosuke',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Palopo',
                'tanggal_lahir' => '2006-04-17',
                'alamat' => 'Jl. Bahonsuai',
                'provinsi' => 72,
                'kabupaten_kota' => 7203,
                'kecamatan' => 7203041,
                'desa_kelurahan' => 7203041003,
                'nomor_hp' => '081212121212',
                'email' => 'inosuke@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'institusi_id' => 1,
                'nama_lengkap' => 'Zenetsu',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Siwa',
                'tanggal_lahir' => '2001-12-22',
                'alamat' => 'Jl. Siwa',
                'provinsi' => 73,
                'kabupaten_kota' => 7313,
                'kecamatan' => 7313120,
                'desa_kelurahan' => 7313120006,
                'nomor_hp' => '02187897989',
                'email' => 'zenetsu@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 296,
                'institusi_id' => 5,
                'nama_lengkap' => 'DPL 1',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '1998-08-16',
                'alamat' => 'Jl SIs Aljufri',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '081354643573',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-28 10:42:05',
                'updated_at' => '2022-07-28 10:42:05',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 297,
                'institusi_id' => 5,
                'nama_lengkap' => 'DPL 2',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '2011-12-12',
                'alamat' => 'Parigi',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '21323123',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-28 10:43:24',
                'updated_at' => '2022-07-29 22:16:10',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'institusi_id' => 5,
                'nama_lengkap' => 'Surveyor Untad 1',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '2009-12-12',
                'alamat' => 'asdsa',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '1231213',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-28 18:27:55',
                'updated_at' => '2022-07-28 18:27:55',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 5,
                'institusi_id' => 5,
                'nama_lengkap' => 'Surveyor Untad 2',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '2022-06-08',
                'alamat' => 'asdasd',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '12312312321',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-28 18:28:33',
                'updated_at' => '2022-07-28 18:28:33',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 6,
                'institusi_id' => 5,
                'nama_lengkap' => 'Surveyor Untad 3',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '2022-12-12',
                'alamat' => 'sadad',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '0123123213',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-29 10:36:34',
                'updated_at' => '2022-07-29 10:36:34',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 7,
                'institusi_id' => 5,
                'nama_lengkap' => 'Surveyor Untad 4',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Parigi',
                'tanggal_lahir' => '2011-08-11',
                'alamat' => 'SDSadsad',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '123213123123',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-29 10:37:32',
                'updated_at' => '2022-07-29 10:37:32',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 298,
                'institusi_id' => 5,
                'nama_lengkap' => 'Universitas Tadulako',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Palu',
                'tanggal_lahir' => '1998-08-16',
                'alamat' => 'Palu',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '00000000000000',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-29 15:17:42',
                'updated_at' => '2022-07-29 15:17:42',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 299,
                'institusi_id' => 6,
                'nama_lengkap' => 'alkhairat',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'asdasd',
                'tanggal_lahir' => '2022-12-12',
                'alamat' => 'asdasdasd',
                'provinsi' => 72,
                'kabupaten_kota' => 7208,
                'kecamatan' => 7208020,
                'desa_kelurahan' => 7208020015,
                'nomor_hp' => '88565675675',
                'email' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-07-29 22:10:28',
                'updated_at' => '2022-07-29 22:10:28',
            ),
        ));
        
        
    }
}