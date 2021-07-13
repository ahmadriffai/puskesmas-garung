<?php

use App\Antrian;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(PasienTableSeeder::class);
        $this->call(LayananTableSeeder::class);
        Antrian::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
