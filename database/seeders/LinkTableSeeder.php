<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('link')->delete();
        
        \DB::table('link')->insert(array (
            0 => 
            array (
                'id_link' => 1,
                'id_kategori_link' => 1,
                'id_user' => 4,
                'judul_link' => 'BPKAD',
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
                'id_link' => 3,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'LPSE',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'c22b7437-89d4-4de9-a07e-79162006e03f-3-1611799128.jpg',
                'website' => 'https://www.lpse.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 08:58:48',
            ),
            2 => 
            array (
                'id_link' => 4,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'Donk',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => '78847618-3181187181896522-7322660115713097728-o-1611800364.jpg',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:19:25',
            ),
            3 => 
            array (
                'id_link' => 5,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'Tesst',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'pajero-1611800408.jpg',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:20:08',
            ),
            4 => 
            array (
                'id_link' => 6,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'https://bpkad.jabarprov.go.id',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'bpkad-logo-1611800485.jpg',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:20:26',
            ),
            5 => 
            array (
                'id_link' => 7,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'lorem',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'c22b7437-89d4-4de9-a07e-79162006e03f-2-1611800529.jpg',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:22:09',
            ),
            6 => 
            array (
                'id_link' => 8,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'ispum',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'logo-bpkad-1-1611800557.png',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:22:38',
            ),
            7 => 
            array (
                'id_link' => 9,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'wur',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'logo-bpkad2-1611800587.png',
                'website' => 'https://bpkad.jabarprov.go.id',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:23:08',
            ),
        ));
        
        
    }
}