<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agenda')->delete();
        
        \DB::table('agenda')->insert(array (
            0 => 
            array (
                'id_agenda' => 1,
                'id_user' => 4,
                'id_kategori_agenda' => 6,
                'slug_agenda' => 'latihan-agenda',
                'judul_agenda' => 'Latihan Agenda',
                'isi' => '<p>Latihan</p>',
                'status_agenda' => 'Publish',
                'jenis_agenda' => 'Agenda',
                'keywords' => 'adad',
                'gambar' => NULL,
                'icon' => 'daad',
                'hits' => 0,
                'urutan' => NULL,
                'tanggal_mulai' => '2020-09-12',
                'tanggal_selesai' => '2020-09-12',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '17:00:00',
                'tempat' => 'AWS Indonesia',
                'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'tanggal_post' => '2020-09-12 23:46:53',
                'tanggal_publish' => '2020-09-12 23:42:16',
                'tanggal' => '2020-09-13 07:09:38',
            ),
        ));
        
        
    }
}