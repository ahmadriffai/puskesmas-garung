<?php

namespace App\Http\Controllers;

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

}
