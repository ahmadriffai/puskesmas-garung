<?php

namespace App\Http\Controllers;

use App\Antrian;
use App\Pasien;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
{
    //
    public function index($idLayanan){

        $antrian = Antrian::orderBy('created_at', 'desc')->first();

        return view('daftar.index', ['idLayanan' => $idLayanan, 'antrian' => $antrian]);
    }

    public function store(Request $request){
        $daftar = $request->validate([
            'nik' => 'required|unique:pasien,nik',
            'nama' => 'required',
            'alamat' => 'required',
            'keluhan' => 'required',
        ]);

        DB::beginTransaction();

        try {

            $pasien = new Pasien();
            $pasien->nik = $request->nik;
            $pasien->nama = $request->nama;
            $pasien->no_hp = $request->no_hp;
            $pasien->alamat = $request->alamat;
            $pasien->id_layanan = $request->idLayanan;
            $pasien->keluhan = $request->keluhan;
            $pasien->save();

            $antrian = new Antrian();
            $antrian->nik = $request->nik;
            $antrian->save();

            DB::commit();
            return redirect()->route('antrian.show', ['antrian' => $antrian]);

        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect()->back()->with('idLayanan', $request->idLayanan);


    }

    public function ambilAntrian(Request $request){
        $request->validate([
            'nik1' => 'required|unique:antrian,nik',
        ]);

        DB::beginTransaction();

        try {
            $antrian = new Antrian();
            $antrian->nik = $request->nik;
            $antrian->save();

            $pasien = Pasien::where('nik1', $request->nik);
            $pasien->update([
                'id_layanan' => $request->idLayanan,
                'keluhan' => $request->keluhan
            ]);

            DB::commit();

            return redirect()->route('antrian.show', ['antrian' => $antrian]);

        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect()->back();

    }
}
