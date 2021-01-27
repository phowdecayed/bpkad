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
                'gambar' => 'testimonials-1.jpg',
                'tanggal' => '2021-01-18 10:51:24',
            ),
        ));
        
        
    }
}