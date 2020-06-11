<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provinsi;
use App\KabKot;
use App\Kecamatan;

class AlamatController extends Controller
{
    public function provinsi()
    {
        $provinsi=Provinsi::all();

        return view('pembeli.content.edit_profile', compact('provinsi'));
    }

    public function kabkot()
    {
        $id_provinsi=Input::get('id_provinsi');
        $kabkot=KabKot::select('id_kabkot','nama_kabkot')->where('id_provinsi', $id_provinsi)->get();

        return response()->json($kabkot);
    }

    public function kecamatan()
    {
        $id_kabkot=Input::get('id_kabkot');
        $kecamatan=Kecamatan::select('id_kec','nama_kec')->where('id_kabkot', $id_kabkot)->get();

        return response()->json($kecamatan);
    }
}
