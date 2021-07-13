<?php

namespace App\Http\Controllers;

use App\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    //

    public function index(){
        return view('antrian.index');
    }

    public function store(Request $request){
        $request->validate(['nama' => 'required']);

        $antrian = new Antrian();
        $antrian->nama = $request->nama;
        $antrian->save();

        return redirect()->route('antrian.show',['antrian' => $antrian->nomer_antrian]);
    }

    public function show(Antrian $antrian){
        return view('antrian.show', ['antrian' => $antrian]);
    }


}
