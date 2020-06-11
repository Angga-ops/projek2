<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Auth;
use Session;
use Image;
use DB;
use App\User;
use App\Produk;
use App\Produk_Detail;
use App\Kategori;
use App\Keranjang;
use App\ProfilePembeli;
use App\AlamatDelivery;
use App\Cart;
use App\Detail_Pesanan;

class AdminController extends Controller
{
    public function index()
    {
        $data_pengguna = User::all()->count();
        $data_produk = Produk::all()->count();
        $data_pesanan = Detail_Pesanan::all()->count();
        return view('admin.content.index', compact('data_pengguna', 'data_produk', 'data_pesanan'));
    }
}
