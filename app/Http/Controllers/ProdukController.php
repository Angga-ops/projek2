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
use Alert;

class ProdukController extends Controller
{
    //==========ADMIN AREA==========
    public function viewproduk(){
        $produk = Produk::get();
        return view('admin.content.produk', compact('produk'));
    }

    public function addproduk(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['id_kategori'])){
                return redirect()->back()->with('flash_message_error','Under Category is Missing :(');    
            }
            
            $produk = new Produk;
            $produk->id_kategori .= $data['id_kategori'];
            $produk->nama_produk= $data['nama_produk'];
            $produk->kode_produk = $data['kode_produk'];
            
            if(!empty($data['deskripsi'])){
                $produk->deskripsi = $data['deskripsi'];
            }
            else{
                $produk->deskripsi = '';
            }
            
            $produk->harga = $data['harga'];
            $produk->stok = $data['stok'];
            
            if($request->hasfile('image')){
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $nama_image = rand(111,99999).'.'.$extension;
                $image_path = 'img/produk/';
                $image-> move($image_path,$nama_image);
                 
                $produk->image = $nama_image;
            }
            $produk->save();
            return redirect(route('admin-produk'))->with('flash_message_success','Produk berhasil ditambahkan');
        }
        
        $kategori = Kategori::where(['status'=>1])->get();
        $kategori_dropdown = "<option value='' selected disabled>Pilih Kategori</option>";
        foreach($kategori as $kat){
            $kategori_dropdown .= "<option value='".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
        }
        
        return view('admin.content.tambah_produk')->with(compact('kategori_dropdown'));
    }

    public function editproduk(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();

            if($request->hasFile('image')){
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $nama_image = rand(111,99999).'.'.$extension;
                $image_path = 'img/produk/';
                $image-> move($image_path,$nama_image);

                Produk::where('id_produk', $id)->update([
                    'image' => $nama_image,
                ]);
            }else{
                $nama_image = $data['current_image']; 
            }
            if(empty($data['deskripsi'])){
                $data['deskripsi'] = '';
            }

            Produk::where(['id_produk'=>$id])->update(['id_kategori'=>$data['id_kategori'],
            'nama_produk'=>$data['nama_produk'],'kode_produk'=>$data['kode_produk'],
            'harga'=>$data['harga'],'stok'=>$data['stok'],'deskripsi'=>$data['deskripsi'],
            'image'=>$nama_image]);
            return redirect(route('admin-produk'))->with('flash_message_success','Produk Berhasil di Update');
        }
        $detail_produk = Produk::where(['id_produk'=>$id])->first();

        $kategori = Kategori::where(['status'=>1])->get();
        $kategori_dropdown = "<option value='' selected disabled>Pilih Kategori</option>";
        foreach($kategori as $kat){
            if($kat->id_kategori==$detail_produk->id_kategori){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $kategori_dropdown .= "<option value='".$kat->id_kategori."' ".$selected.">".$kat->nama_kategori."</option>";
        }
        
        return view('admin.content.edit_produk')->with(compact('detail_produk','kategori_dropdown')); 
    
    }

    public function hapusproduk($id=null){
        Produk::where(['id_produk'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Produk berhasil dihapus');
    }

    public function hapusimageproduk($id=null){
        $image_produk = Produk::where(['id_produk'=>$id])->first();
        
        $image_path = 'img/produk/';
        
        if(file_exists($image_path.$image_produk->image)){
            unlink($image_path.$image_produk->image);
        }
        
        Produk::where(['id_produk'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_error','Image Produk sudah terhapus');

    }

    //==========PEMBELI AREA==========
    public function shop(Request $request){
        $s = $request->input('s');
        $produk = Produk::search($s)->paginate(12);
        $produk = Produk::orderBy('id_produk','DESC')->search($s)->paginate(12);
        $produk = Produk::inRandomOrder()->search($s)->paginate(12);
        $kategori = Kategori::with('kategori')->where(['sub_kat'=>1])->get();
        $subkategori = Kategori::with('kategori')->where(['sub_kat'=>2])->get();
        
        return view('pembeli.content.produk', compact('produk','kategori','subkategori','s'));
    }

    public function akse(){
        $subkategori = Kategori::with('kategori')->where(['sub_kat'=>2])->get();

        View::composer(
            ['profile', 'dashboard'],
            'App\Http\View\Composers\MyViewComposer'
        );
    }

    public function products($url = null){
        //Show 404 Page if category url does not exist
        $countCategory = Kategori::where(['url'=>$url])->count();
        if($countCategory==0){
            abort(404);
        }

        //Display Categories or Sub Categories in left Sidebar of Home Page
        $kategori = Kategori::with('kategori')->where(['sub_kat'=>1])->get();
        $subkategori = Kategori::with('kategori')->where(['sub_kat'=>2])->get();
        $categoryDetails = Kategori::where(['url'=> $url])->first();

        if($categoryDetails->sub_kat==1){
         //if url is Main category url
            $produk = Produk::where(['id_kategori'=>$categoryDetails->id_kategori])->get();
            $produk = json_decode(json_encode($produk));
        }
        else{
            //if url is sub category url
            $produk = Produk::where(['id_kategori'=>$categoryDetails->id_kategori])->get();
        }

        return view('pembeli.content.kategori_produk', compact('kategori','subkategori','categoryDetails','produk')); 
    }

    public function detailproduk($id=null){
        $detail_produk = Produk::where('id_produk',$id)->first();
        $detail_produk = json_decode(json_encode($detail_produk));
        $total_stok = Produk::where('id_produk',$id)->sum('stok');
        $relateProduk=Produk::where([['id_produk','!=',$id],['id_kategori',$detail_produk->id_kategori]])->get();
        $kategori = Kategori::with('kategori')->where(['sub_kat'=>1])->get();
        $subkategori = Kategori::with('kategori')->where(['sub_kat'=>2])->get();

        return view('pembeli.content.detail_produk', compact('detail_produk','kategori','subkategori','total_stok','relateProduk'));
    }

    public function cart(){
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $userCart = DB::table('cart')->where(['user_email'=>$user_email])->get();
            }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
            }
            foreach($userCart as $key =>$product){
            //echo $product->product_id;
            $productDetails = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->image = $productDetails->image;
            }
            $countcart = Keranjang::where(['user_email'=>$user_email])->count();
            //echo"<pre>"; print_r($userCart);die;
            return view('pembeli.content.keranjang')->with(compact('userCart', 'countcart'));
    }

    public function keranjang(){
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
        $countcart = Cart::where(['id_users'=>$id_users])->count();
        
        return view('pembeli.content.keranjang')->with(compact('userCart', 'countcart'));
    }

    public function addtokeranjang(Request $request){
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

    public function updateqtycart($id=null,$qty=null){
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

    public function deleteKeranjangProduk($id = NULL){
        DB::table('keranjang')->where('id_keranjang',$id)->delete();
        return redirect('keranjang')->with('flash_message_error','Produk telah dihapus dari Keranjang Anda');
    
    }

    public function addtocart(Request $request){
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');
        $data = $request->all();

        if(empty(Auth::user()->email)){
            $data['user_email'] = '';
        }else{
            $data['user_email'] = Auth::user()->email;
        }

        $session_id = Session::get('session_id');
        if(empty($session_id)){
            $session_id = str_random(40);
            Session::put('session_id',$session_id);
        }

        $countProducts =DB::table('cart')->where(['id_produk'=>$data['id_produk'],'session_id'=>$session_id])->count();
        if($countProducts>0){
            return redirect()->back()->with('flash_message_error','Produk sudah ada di keranjang.');
        }else{
        
            DB::table('cart')->insert(['id_produk'=>$data['id_produk'],'nama_produk'=>$data['nama_produk'],
            'kode_produk'=>$data['kode_produk'],'harga'=>$data['harga'],'qty'=>$data['qty'],'user_email'=>$data['user_email'],'session_id'=>$session_id]);
        }

        return redirect('keranjang')->with('flash_message_success','Produk telah ditambahkan ke keranjang.');
    }

    public function deleteCartProduct($id = NULL){
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');
        DB::table('cart')->where('id_keranjang',$id)->delete();
        return redirect('keranjang')->with('flash_message_error','Produk telah dihapus dari Keranjang Anda');
    
    }

    public function updateCartQuantity($id=null,$qty=null){
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');
        $getCartSetails = DB::table('cart')->where('id_keranjang',$id)->first();
        $getAttributeStock = Produk::where('kode_produk',$getCartSetails->kode_produk)->first();
        $updated_quantity = $getCartSetails->qty+$qty;
        if($getAttributeStock->stok >= $updated_quantity){
        DB::table('cart')->where('id_keranjang',$id)->increment('qty',$qty);
        return redirect('keranjang')->with('flash_message_success','Kuantitas Produk Telah Berhasil Diperbarui');
        }else{
        return redirect('keranjang')->with('flash_message_error','Kuantitas Produk yang Diperlukan tidak Tersedia');  
        }
    }

    public function checkout(Request $request){
        $id_users = Auth::user()->id;
        $user_email = Auth::user()->email;
        $detail_user = User::find($id_users);
        $userCart = DB::table('keranjang')->where(['id_users'=>$id_users])->get();
        $alamat = DB::table('users')->select('provinsi', 'kabkot', 'alamat')->where('id', $id_users);

        $shippingCount = AlamatDelivery::where('id_users',$id_users)->count();
        $detail_shipping = array();
        if($shippingCount>0){
            $detail_shipping = AlamatDelivery::where('id_users',$id_users)->first();
        }
        
        $session_id = Session::get('session_id');
        DB::table('keranjang')->where(['session_id'=>$session_id])->update(['id_users'=>$id_users]);
        
        if($request->isMethod('post')){
            $data = $request->all();

            if(empty($data['billing_nama']) ||empty($data['billing_no_hp'])
            ||empty($data['billing_provinsi']) ||empty($data['billing_kabkot']) 
            ||empty($data['billing_alamat']) ||empty($data['shipping_nama'])
            ||empty($data['shipping_no_hp']) ||empty($data['shipping_provinsi'])
            ||empty($data['shipping_kabkot']) ||empty($data['shipping_alamat'])){
            return redirect()->back()->with('flash_message_error','Harap isi semua data untuk melanjutkan');
            }
            //Update User Details
            User::where('id',$id_users)->update(['nama'=>$data['billing_nama'],'no_hp'=>$data['billing_no_hp'],
            'provinsi'=>$data['billing_provinsi'],'kabkot'=>$data['billing_kabkot'],'alamat'=>$data['billing_alamat']]);

            if($shippingCount>0){
                AlamatDelivery::where('id_users',$id_users)->update(['nama'=>$data['shipping_nama'],'no_hp'=>$data['shipping_no_hp'],
                'provinsi'=>$data['shipping_provinsi'],'kabkot'=>$data['shipping_kabkot'],'alamat'=>$data['shipping_alamat'],
                'catatan'=>$data['shipping_catatan']]);
            }
            else{
            $shipping = new AlamatDelivery;
            $shipping->id_users = $id_users;
            $shipping->nama = $data['shipping_nama'];
            $shipping->no_hp = $data['shipping_no_hp'];
            $shipping->provinsi = $data['shipping_provinsi'];
            $shipping->kabkot = $data['shipping_kabkot'];
            $shipping->alamat = $data['shipping_alamat'];
            $shipping->catatan = $data['shipping_catatan'];
            $shipping->save();
            }

            $produkorder = DB::table('keranjang')->select('id_produk', 'qty')->where('id_users', $id_users)->first();
            $date_time = date('Y-m-d');
            $invoice = mt_rand(10000,99999);

            $pesananCount = Detail_Pesanan::where('id',$id_users)->count();
            $detail_pesanan = array();
            if($pesananCount>0){
                $detail_pesanan = Detail_Pesanan::where('id',$id_users)->first();
            }

            $pesanan = new Detail_Pesanan;
            $pesanan->id = $id_users;
            $pesanan->id_produk = $produkorder->id_produk;
            $pesanan->jumlah_bayar = $data['jumlah_total'];
            $pesanan->date_time = $date_time;
            $pesanan->invoice = $invoice;
            $pesanan->save();

            $hapuskeranjang = Cart::where('id_users',$id_users)->delete();

            $stokproduk = Produk::where('id_produk', $produkorder->id_produk)->first();
            $stokbaru = $stokproduk->stok - $produkorder->qty;
            Produk::where('id_produk', $produkorder->id_produk)->update(['stok'=>$stokbaru]);

            return redirect()->action('ProdukController@orderReview');
        }

        foreach($userCart as $key =>$product){
            $productDetails = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->image = $productDetails->image;
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

        return view('pembeli.content.checkout')->with(compact('detail_user','alamat','detail_shipping','userCart'));
    }

    public function orderReview(Request $request){
        $id_users = Auth::user()->id;
        $user_email = Auth::user()->email;
        $detail_user = User::where('id',$id_users)->first();
        $detail_shipping = AlamatDelivery::where('id_users',$id_users)->first();
        $detail_shipping =json_decode(json_encode($detail_shipping));
        $detail_pesanan = Detail_Pesanan::where('id',$id_users)->first();
        $detail_pesanan =json_decode(json_encode($detail_pesanan));

        $userCart = DB::table('riwayat_keranjang')->where(['id_users'=>$id_users])->get();

        foreach($userCart as $key =>$product){
            $nama_produk = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->nama_produk = $nama_produk->nama_produk;
        }

        foreach($userCart as $key =>$product){
            $harga = Produk::where('id_produk',$product->id_produk)->first();
            $userCart[$key]->harga = $harga->harga;
        }
        
        return view('pembeli.content.pesanan_saya')->with(compact('detail_user', 'detail_shipping', 'detail_pesanan', 'userCart'));
    }

}