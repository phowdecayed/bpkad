<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(AgendaTableSeeder::class);
        $this->call(BeritaTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(DownloadTableSeeder::class);
        $this->call(GaleriTableSeeder::class);
        $this->call(HeadingTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(KategoriDownloadTableSeeder::class);
        $this->call(KategoriGaleriTableSeeder::class);
        $this->call(KategoriStaffTableSeeder::class);
        $this->call(KonfigurasiTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VideoTableSeeder::class);
    }
}
