<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id_user' => 4,
                'nama' => 'Admin',
                'email' => 'Admin@admin.com',
                'username' => 'admin1',
                'password' => '7110eda4d09e062aa5e4a390b0a572ac0d2c0220',
                'akses_level' => 'Admin',
                'kode_rahasia' => NULL,
                'gambar' => 'c22b7437-89d4-4de9-a07e-79162006e03f-2-1611721150.jpg',
                'tanggal' => '2021-01-18 10:51:24',
            ),
            1 => 
            array (
                'id_user' => 5,
                'nama' => 'Ujang Dadang',
                'email' => 'admin@gmail.com',
                'username' => 'admin2',
                'password' => '7110eda4d09e062aa5e4a390b0a572ac0d2c0220',
                'akses_level' => 'Admin',
                'kode_rahasia' => NULL,
                'gambar' => 'c22b7437-89d4-4de9-a07e-79162006e03f-1611721263.jpg',
                'tanggal' => '2021-01-27 11:21:03',
            ),
        ));
        
        
    }
}