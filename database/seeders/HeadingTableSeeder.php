<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeadingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('heading')->delete();
        
        \DB::table('heading')->insert(array (
            0 => 
            array (
                'id_heading' => 1,
                'id_user' => 0,
                'judul_heading' => 'Berita dan Artikel',
                'keterangan' => '<p>Berita dan Artikel</p>',
                'gambar' => 'heading-03-1600256326-1611032712.jpg',
                'halaman' => 'Berita',
                'tanggal' => '2021-01-19 12:05:12',
            ),
            1 => 
            array (
                'id_heading' => 2,
                'id_user' => 0,
                'judul_heading' => 'Tentang',
                'keterangan' => '<p>Tentang</p>',
                'gambar' => 'landing2-1611344929.jpg',
                'halaman' => 'Tentang',
                'tanggal' => '2021-01-23 02:48:49',
            ),
            2 => 
            array (
                'id_heading' => 3,
                'id_user' => 0,
                'judul_heading' => 'Halaman Kontak',
                'keterangan' => '<p>Halaman Kontak</p>',
                'gambar' => 'kontak-1600257025-1611032631.jpg',
                'halaman' => 'Kontak',
                'tanggal' => '2021-01-19 12:03:51',
            ),
            3 => 
            array (
                'id_heading' => 4,
                'id_user' => 0,
                'judul_heading' => 'Board and Team',
                'keterangan' => '<p>Board and Team</p>',
                'gambar' => 'board-and-team-300-1600260175-1611032756.jpg',
                'halaman' => 'Team',
                'tanggal' => '2021-01-19 12:05:56',
            ),
            4 => 
            array (
                'id_heading' => 5,
                'id_user' => 0,
                'judul_heading' => 'Layanan',
                'keterangan' => '<p>Layanan</p>',
                'gambar' => 'static-1611345042.jpg',
                'halaman' => 'Layanan',
                'tanggal' => '2021-01-23 02:50:42',
            ),
            5 => 
            array (
                'id_heading' => 6,
                'id_user' => 0,
                'judul_heading' => 'Dokumen',
                'keterangan' => '<p>Dokumen</p>',
                'gambar' => 'dokumen-1600317093-1611032780.jpg',
                'halaman' => 'Dokumen',
                'tanggal' => '2021-01-19 12:06:20',
            ),
        ));
        
        
    }
}