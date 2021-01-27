<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('video')->delete();
        
        \DB::table('video')->insert(array (
            0 => 
            array (
                'id_video' => 1,
                'judul' => 'Video Profil Nanin Nayani Adam',
                'posisi' => 'Video',
                'keterangan' => 'BPKAD JABAR',
                'video' => 'ZWgVhhfL_9M',
                'urutan' => 1,
                'gambar' => 'maxresdefault-1611106825.jpg',
                'id_user' => 4,
                'tanggal' => '2021-01-20 08:40:48',
            ),
        ));
        
        
    }
}