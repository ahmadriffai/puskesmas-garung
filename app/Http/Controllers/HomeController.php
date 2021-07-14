<?php

namespace App\Http\Controllers;

use App\InfoKes;
use App\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $layanan = Layanan::all();
        $infoKes = InfoKes::all();
        return view('home.index', ['layanan' => $layanan, 'infoKes' => $infoKes]);
    }

}
