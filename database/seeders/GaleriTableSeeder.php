<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('galeri')->delete();

        \DB::table('galeri')->insert(array (
            0 =>
            array (
                'id_galeri' => 20,
                'id_kategori_galeri' => 6,
                'id_user' => 4,
                'judul_galeri' => 'BPKAD',
                'jenis_galeri' => 'Homepage',
                'isi' => 'Test',
                'gambar' => '12-1611305339.jpg',
                'website' => 'http://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => 'Publish',
                'urutan' => NULL,
                'status_text' => 'Ya',
                'tanggal' => '2021-01-22 15:48:59',
            ),
            1 =>
            array (
                'id_galeri' => 21,
                'id_kategori_galeri' => 6,
                'id_user' => 4,
                'judul_galeri' => 'BPKAD-Test',
                'jenis_galeri' => 'Homepage',
                'isi' => 'Donk',
                'gambar' => '13-1611305324.jpg',
                'website' => 'http://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => 'Publish',
                'urutan' => NULL,
                'status_text' => 'Ya',
                'tanggal' => '2021-01-22 15:48:44',
            ),
        ));


    }
}
