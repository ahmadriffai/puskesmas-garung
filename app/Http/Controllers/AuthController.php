<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
        ]);

        $user = User::where('email' , $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('otentikasi', true);
                $request->session()->put('user', $user);

                if ($user->role == 'admin') {
                    return redirect()->route('admin.index');
                }else{
                    return redirect('admin.index');

                }

            }else {
                return redirect()->back()
                        ->with('msg', 'Password yang anda masukan salah')
                        ->withInput($request->except('password'));;
            }
        }else{
            return redirect()
                    ->back()
                    ->with('msg', 'Email anda belum terdaftar')
                    ->withInput($request->except('password'));
        }
    }
}
