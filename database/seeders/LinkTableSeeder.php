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
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'SIPKD',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'sipkd-1612253000.png',
                'website' => 'https://sipkd.jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 08:58:48',
            ),
            1 => 
            array (
                'id_link' => 2,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'JDIH',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'jdih-1612252969.png',
                'website' => 'https://jdih.jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:19:25',
            ),
            2 => 
            array (
                'id_link' => 3,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'LPSE',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'lpse-logo-1612252941.png',
                'website' => 'https://lpse.jabarprov.go.id/eproc4',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:20:08',
            ),
            3 => 
            array (
                'id_link' => 4,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'ppid',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'ppid-1612253703.png',
                'website' => 'http://ppid.jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:20:26',
            ),
            4 => 
            array (
                'id_link' => 5,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'pikobar',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'pikobar-1612253817.jpg',
                'website' => 'https://pikobar.jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:22:09',
            ),
            5 => 
            array (
                'id_link' => 6,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'jabarprov.go.id',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'jabarprov-1612253690.jpg',
                'website' => 'https://jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:22:38',
            ),
            6 => 
            array (
                'id_link' => 7,
                'id_kategori_link' => NULL,
                'id_user' => 4,
                'judul_link' => 'humas jabar',
                'jenis_galeri' => NULL,
                'isi' => NULL,
                'gambar' => 'humas-jabar-1612252820.png',
                'website' => 'http://humas.jabarprov.go.id/',
                'hits' => NULL,
                'popup_status' => NULL,
                'urutan' => NULL,
                'status_text' => NULL,
                'tanggal' => '2021-01-28 09:23:08',
            ),
        ));
        
        
    }
}