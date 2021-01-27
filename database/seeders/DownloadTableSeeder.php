<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DownloadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('download')->delete();
        
        \DB::table('download')->insert(array (
            0 => 
            array (
                'id_download' => 1,
                'id_kategori_download' => 1,
                'id_user' => 4,
                'judul_download' => 'Undang Undang Nomor 12 Tahun 2008',
                'jenis_download' => 'Artikel',
                'isi' => '<p>Undang Undang Nomor 12 Tahun 2008</p>',
                'gambar' => 'undang-undang-nomor-12-tahun-2008-1610944263.pdf',
                'website' => NULL,
                'hits' => 12,
                'tanggal' => '2021-01-19 11:41:16',
            ),
        ));
        
        
    }
}