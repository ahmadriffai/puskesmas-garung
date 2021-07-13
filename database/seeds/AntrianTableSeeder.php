<?php

use App\Antrian;
use Illuminate\Database\Seeder;

class AntrianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $antrian = new Antrian();
        $antrian->truncate();
    }
}
