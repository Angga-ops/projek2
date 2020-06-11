<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use App\User;

class PembeliController extends Controller
{
    public function index(){
        $pembeli = User::all();
        return view('admin.content.pembeli', ['pembeli' => $pembeli]);
    }
    public function edit($id_pembeli)
    {
        $pembeli = User::find($id_pembeli);
        return view('admin.content.pembeli_edit',['pembeli'=>$pembeli]);
    }
    
    public function delete($id_pembeli)
    {
     $pembeli = User::find($id_pembeli);
     $pembeli->delete();
     return redirect('/admin/pembeli');
    }
}
