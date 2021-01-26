<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriGaleriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kategori_galeri')->delete();

        \DB::table('kategori_galeri')->insert(array (
            0 =>
            array (
                'id_kategori_galeri' => 4,
                'slug_kategori_galeri' => 'kegiatan-kedinasan',
                'nama_kategori_galeri' => 'Kegiatan-Kedinasan',
                'urutan' => 2,
            ),
            1 =>
            array (
                'id_kategori_galeri' => 6,
                'slug_kategori_galeri' => 'kegiatan-umum',
                'nama_kategori_galeri' => 'Kegiatan Umum',
                'urutan' => 1,
            ),
        ));


    }
}
