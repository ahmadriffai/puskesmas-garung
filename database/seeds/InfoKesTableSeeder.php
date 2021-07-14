<?php

use App\InfoKes;
use Illuminate\Database\Seeder;

class InfoKesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $infokes1 = new InfoKes();
        $infokes1->truncate();

        $infokes1->judul = "Judul Artikel 1";
        $infokes1->deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloribus laudantium rem sed odit perspiciatis ducimus nihil necessitatibus odio corporis? Quibusdam expedita ad vel rerum nisi officiis veritatis aperiam odit.";
        $infokes1->gambar = "file/url";
        $infokes1->save();

        $infokes2 = new InfoKes();
        $infokes2->judul = "Corona Melanda";
        $infokes2->deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium doloribus laudantium rem sed odit perspiciatis ducimus nihil necessitatibus odio corporis? Quibusdam expedita ad vel rerum nisi officiis veritatis aperiam odit.";
        $infokes2->gambar = "file/url";
        $infokes2->save();


    }
}
