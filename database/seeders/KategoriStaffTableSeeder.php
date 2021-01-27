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
                'id_kategori_staff' => 1,
                'slug_kategori_staff' => 'Test',
                'nama_kategori_staff' => 'Test',
                'keterangan' => 'Tes',
                'urutan' => 1,
            ),
        ));
        
        
    }
}