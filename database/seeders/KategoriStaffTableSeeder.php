<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriStaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_staff')->delete();
        
        \DB::table('kategori_staff')->insert(array (
            0 => 
            array (
                'id_kategori_staff' => 4,
                'bahasa' => 'ID',
                'slug_kategori_staff' => 'senyum-programmer',
                'nama_kategori_staff' => 'Senyum Programmer',
                'keterangan' => 'Yeay...selain tim tutor kita juga ada tim programmer yang bekerja full time maupun part time',
                'urutan' => 2,
            ),
            1 => 
            array (
                'id_kategori_staff' => 6,
                'bahasa' => 'ID',
                'slug_kategori_staff' => 'happy-tutor',
                'nama_kategori_staff' => 'Happy Tutor',
                'keterangan' => 'Java Web Media didampingi oleh tutor-tutor dan instruktur yang berpengalaman di bidangnya.',
                'urutan' => 1,
            ),
        ));
        
        
    }
}