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

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function keranjang()
    {
        $id_users = Auth::user()->id;

        if(Auth::check()){
            $userCart = DB::table('keranjang')->where(['id_users'=>$id_users])->get();
        }
        else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('keranjang')->where(['session_id'=>$session_id])->get();
        }

        foreach($userCart as $key =>$product){
            $detail_produk = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->image = $detail_produk->image;
        }

        foreach($userCart as $key =>$product){
            $nama_produk = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->nama_produk = $nama_produk->nama_produk;
        }

        foreach($userCart as $key =>$product){
            $kode_produk = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->kode_produk = $kode_produk->kode_produk;
        }

        foreach($userCart as $key =>$product){
            $harga = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->harga = $harga->harga;
        }
        $countcart = Keranjang::where(['id_users'=>$id_users])->count();
        
        return view('content.keranjang')->with(compact('userCart', 'countcart'));
    }

    public function addtokeranjang(Request $request)
    {
        $data = $request->all();

        $id_users = Auth::user()->id;

        $session_id = Session::get('session_id');
        if(empty($session_id)){
            $session_id = str_random(40);
            Session::put('session_id',$session_id);
        }

        $jumlah_produk =DB::table('keranjang')->where(['id_produk'=>$data['id_produk'],'session_id'=>$session_id])->count();
        if($jumlah_produk>0){
          return redirect()->back()->with('flash_message_error','Produk sudah ada di keranjang');
        }else{
            DB::table('keranjang')->insert(['id_produk'=>$data['id_produk'],'id_users'=>$id_users,
            'qty'=>$data['qty'],'session_id'=>$session_id]);
        }

        return redirect('keranjang')->with('flash_message_success','Produk telah ditambahkan ke keranjang');
    }

    public function updateqtycart($id=null,$qty=null)
    {
        $getdetcart = DB::table('keranjang')->where('id_keranjang',$id)->first();
        $getatributstok = Produk::where('id_produk',$getdetcart->id_produk)->first();
        $update_qty = $getdetcart->qty+$qty;

        if($getatributstok->stok >= $update_qty){
            DB::table('keranjang')->where('id_keranjang',$id)->increment('qty',$qty);
            return redirect('keranjang')->with('flash_message_success','Kuantitas Produk Telah Berhasil Diperbarui');
        }
        else{
            return redirect('keranjang')->with('flash_message_error','Kuantitas Produk yang Diperlukan tidak Tersedia');  
        }
    }

    public function deleteKeranjangProduk($id = NULL)
    {
        DB::table('keranjang')->where('id_keranjang',$id)->delete();
        return redirect('keranjang')->with('flash_message_error','Produk telah dihapus dari Keranjang Anda');
    
    }
}
