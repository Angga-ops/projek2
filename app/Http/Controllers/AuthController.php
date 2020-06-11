<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Pembeli;

class AuthController extends Controller
{
    public function index(){
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu!');
        }
        else{
            return view('content.home_user');
            //dd('Login berhasil');
        }

        // if (Session::get('username')) {
        //     return view('content.contoh');
        // }
        // else {
        //     return redirect('login')->with('alert', 'Kamu harus login dulu!');
        // }
    }
    
    public function getLogin(){
        if (Session::get('username')) {
            return view('content.home_user');
        }
        else {
            return view('content.login')->with('alert', 'Kamu harus login dulu!');
        }
    }

    public function postLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;

        $query=User::where('username', $username)->first();

        //$query=DB::table('pembeli')->where('username', $request->username)->where('password', $request->password)->first();

        if($query){
            if (Hash::check($password, $query->password)) {
                Session::put('username', $query->username);
                Session::put('login', TRUE);
            
                return redirect('home_user');
            }
            else {
                //dd('U/P Salah');
                return redirect('login')->with('alert', 'Username atau Password Salah!');
            }
        }
        else {
            //dd('Data tidak ada');
            return redirect('login')->with('alert', 'Data tidak ada!');
        }
    }

    public function getDaftar(){
        if (Session::get('username')) {
            return view('content.home_user');
        }
        else {
            return view('content.daftar');
        }
    }

    public function postDaftar(Request $request){      
        $this->validate($request, [
            'nama' => 'required|string|min:4',
            'username' => 'required|unique:pembeli',
            'email' => 'required|unique:pembeli',
            'nohp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'password_konfirm' => 'required|same:password',
        ]);

        Pembeli::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama_pembeli' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat
        ]);

        return redirect('login')->with('alert-success', 'Kamu berhasil mendaftar!');
    }

    public function logout(){
        Session::flush();

        return redirect('login')->with('sukses','Anda Telah Logout');
    }
}
