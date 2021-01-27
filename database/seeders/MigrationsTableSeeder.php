<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2021_01_19_044523_create_contacts_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2021_01_23_143749_create_agenda_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2021_01_23_143749_create_berita_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2021_01_23_143749_create_contacts_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2021_01_23_143749_create_download_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2021_01_23_143749_create_galeri_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2021_01_23_143749_create_heading_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2021_01_23_143749_create_kategori_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2021_01_23_143749_create_kategori_download_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2021_01_23_143749_create_kategori_galeri_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2021_01_23_143749_create_kategori_staff_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2021_01_23_143749_create_konfigurasi_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2021_01_23_143749_create_users_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2021_01_23_143749_create_video_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2021_01_27_082849_create_agenda_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2021_01_27_082849_create_berita_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2021_01_27_082849_create_contacts_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2021_01_27_082849_create_download_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2021_01_27_082849_create_galeri_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2021_01_27_082849_create_heading_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2021_01_27_082849_create_kategori_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2021_01_27_082849_create_kategori_download_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2021_01_27_082849_create_kategori_galeri_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2021_01_27_082849_create_kategori_staff_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2021_01_27_082849_create_konfigurasi_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2021_01_27_082849_create_users_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2021_01_27_082849_create_video_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}