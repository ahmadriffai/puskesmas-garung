<?php

use App\Pasien;
use Illuminate\Database\Seeder;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pasien = new Pasien();
        $pasien->truncate();

        $pasien->nik = "3325051607010001";
        $pasien->nama = "Ahmad Rifai";
        $pasien->alamat = "Rejosari";
        $pasien->no_hp = "085155380996";
        $pasien->id_layanan = 1;
        $pasien->keluhan = "Keluhan";
        $pasien->save();

    }
}
