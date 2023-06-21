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
        $this->call(MyUsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DesignSeeder::class);
        $this->call(PembelianSeeder::class);
    }
}