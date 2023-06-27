<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');    
    }

    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $ceklogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::attempt($ceklogin)){
            if(Auth::user()->role == 'ADMIN'){
                return redirect ('admin');
            }
            else if(Auth::user()->role == 'USER'){
                return redirect ('/home');
            }
  
        } else {
            return redirect('login')->withErrors(['message' => 'Email atau Password yang anda masukan salah'])->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $newuser = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        $newuser['password'] = \Illuminate\Support\Facades\Hash::make($newuser['password']);
        User::create($newuser);

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('status', 'success')->with('pesan', 'Berhasil Keluar');
    }
}
