<?php

use App\Layanan;
use Illuminate\Database\Seeder;

class LayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $umum = new Layanan();

        $umum->truncate();

        $umum->layanan = "Umum";
        $umum->gambar = "public/layanan";
        $umum->save();

        $poliGigi = new Layanan();
        $poliGigi->layanan = "Poli Gigi";
        $poliGigi->gambar = "public/layanan";
        $poliGigi->save();

        $persalinan = new Layanan();
        $persalinan->layanan = "Persalinan";
        $persalinan->gambar = "public/layanan";
        $persalinan->save();

        $ibuHamil = new Layanan();
        $ibuHamil->layanan = "Ibu Hamil";
        $ibuHamil->gambar = "public/layanan";
        $ibuHamil->save();
    }

}
