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
        return view('home.index', ['layanan' => $layanan]);
    }

    public function infokes()
    {
        $infoKes = InfoKes::all();
        return view('home.infokes', ['infoKes' => $infoKes]);
    }
    public function about()
    {
        return view('home.about');
    }

}
