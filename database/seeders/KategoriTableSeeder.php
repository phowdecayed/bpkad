<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kategori')->delete();

        \DB::table('kategori')->insert(array (
            0 =>
            array (
                'id_kategori' => 6,
                'id_user' => 4,
                'slug_kategori' => 'berita',
                'nama_kategori' => 'Berita',
                'urutan' => 3,
                'hits' => 0,
                'tanggal' => '2020-09-13 04:36:42',
            ),
            1 =>
            array (
                'id_kategori' => 8,
                'id_user' => 4,
                'slug_kategori' => 'artikel',
                'nama_kategori' => 'Artikel',
                'urutan' => 2,
                'hits' => NULL,
                'tanggal' => '2021-01-18 11:21:24',
            ),
        ));


    }
}
