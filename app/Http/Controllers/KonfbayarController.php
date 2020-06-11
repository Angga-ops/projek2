<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konfbayar;
use Auth;
use Session;
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

class KonfbayarController extends Controller
{
    public function simpan(Request $request)
    {
        $id_users = Auth::user()->id;
        $pesanan = DB::table('detail_pesanan')->where('id', $id_users)->first();
        $userCart = DB::table('riwayat_keranjang')->where(['id_users'=>$id_users])->get();

        if($request->isMethod('post')){
            $date_time = date('Y-m-d');

            $bukti = $request->file('bukti_bayar');
            $nameOriginal = $bukti->getClientOriginalName();
            $path = 'img/Foto Bukti Transfer/';
            $bukti-> move($path,$nameOriginal);
            $save = new Konfbayar;
            $save->id_pesanan=$pesanan->id_pesanan;
            $save->bank_asal=$request->bank;
            $save->nama_pemilik_rek=$request->namarek;
            $save->date_time=$date_time;
            $save->jumlah_bayar=$request->jumlahbayar;
            $save->bukti_bayar=$nameOriginal;
            $save->save();
            
            return redirect(route('pesanan_saya'));

        }

        return view('pembeli.content.konfirmasi_bayar')->with(compact('pesanan'));
    }
}
