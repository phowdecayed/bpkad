<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriDownloadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_download')->delete();
        
        \DB::table('kategori_download')->insert(array (
            0 => 
            array (
                'id_kategori_download' => 7,
                'bahasa' => 'ID',
                'slug_kategori_download' => 'produk-hukum',
                'nama_kategori_download' => 'Produk Hukum',
                'keterangan' => NULL,
                'urutan' => 1,
            ),
            1 => 
            array (
                'id_kategori_download' => 8,
                'bahasa' => 'ID',
                'slug_kategori_download' => 'rekapitulasi',
                'nama_kategori_download' => 'Rekapitulasi',
                'keterangan' => NULL,
                'urutan' => 2,
            ),
        ));
        
        
    }
}