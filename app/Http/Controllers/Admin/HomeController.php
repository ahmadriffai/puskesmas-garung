<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.index', ['layanan' => $layanan]);
    }
}
