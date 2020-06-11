<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_Pesanan;
use App\Pembeli;
use App\User;
use App\Produk;
use App\Konfbayar;
use DB;

class PesananController extends Controller
{
    public function index()
    {
        $detail_pesanan = Detail_Pesanan::get();
        $transaksi = Konfbayar::get();
        $pesanan = DB::table('transaksi')->join('detail_pesanan', 'detail_pesanan.id_pesanan', '=', 'transaksi.id_pesanan')->get();

        foreach($pesanan as $key =>$val){
            $nama = User::where(['id'=>$val->id])->first();
            $pesanan[$key]->nama = $nama->nama;
        }

        foreach($pesanan as $key =>$val){
            $nama_produk = Produk::where(['id_produk'=>$val->id_produk])->first();
            $pesanan[$key]->nama_produk = $nama_produk->nama_produk;
        }

        return view('admin.content.pesanan', compact('detail_pesanan', 'transaksi', 'pesanan'));
    }

    public function konfirmasi($id=null){
        $status = "Pesanan Dikemas";
        Detail_Pesanan::where(['id_pesanan'=>$id])->update(['status'=>$status]);

        return redirect()->action('PesananController@index');
    }

    public function dikirim($id=null){
        $status = "Pesanan Dikirim";
        Detail_Pesanan::where(['id_pesanan'=>$id])->update(['status'=>$status]);

        return redirect()->action('PesananController@index');
    }
}
