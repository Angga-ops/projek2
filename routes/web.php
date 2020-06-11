<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('homepage', 'HomepageController');
Route::get('/', function () {
    return view('pembeli.content.home');
})->name('home');

//Route Produk
Route::get('produk', 'ProdukController@shop')->name('produk');
Route::get('/produk/{url}','ProdukController@products')->name('kategori');
Route::get('/detail_produk/{id}','ProdukController@detailproduk')->name('detail_produk');

Route::get('kontak', function () {
    return view('pembeli.content.kontak');
})->name('kontak');

//======Route Keranjang, Checkout, Pesanan====
Route::match(['get','post'],'/keranjang', 'ProdukController@keranjang')->name('keranjang');
//Add to cart Route
Route::match(['get','post'],'/add-keranjang', 'ProdukController@addtokeranjang')->name('add_keranjang');
//Delete Cart items Route
Route::get('keranjang/delete-product/{id}','ProdukController@deleteKeranjangProduk');
//Update product quantity in cart
Route::get('/keranjang/update-quantity/{id}/{qty}','ProdukController@updateqtycart');
Route::match(['get','post'],'checkout','ProdukController@checkout')->name('checkout');
Route::match(['get','post'],'pesanan_saya','ProdukController@orderReview')->name('pesanan_saya');
Route::match(['get','post'],'konfirmasi_bayar','KonfbayarController@simpan')->name('konfirmasi_bayar');

//Route Profile Pembeli
Route::get('profile', 'UsersController@users')->name('profile');
Route::match(['get','post'],'/edit-profile', 'UsersController@editusers')->name('edit_profile');
Route::get('/edit-image', 'UsersController@showupdateimage');
Route::post('/edit-image', 'UsersController@updateimage')->name('edit_image');
Route::get('/edit-password', 'UsersController@show');
Route::post('/edit-password', 'UsersController@editpassword')->name('edit_password');
Route::post('/check-user-pwd','UsersController@chkUserPassword');
Route::post('/update-user-pwd','UsersController@updatePassword');
Route::get('/upload', 'UsersController@upload');
Route::post('/upload/proses', 'UsersController@proses_upload')->name('upload_proses');

//Auth
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


// =========Route Admin========
Route::get('login-admin', function(){
    return view('pembeli.content.login');
})->name('loginadmin');
Route::get('/admin/index', 'AdminController@index')->name('admin-dashboard');

//Route tampil pengguna
Route::get('/admin/pembeli', 'PembeliController@index')->name('admin-pembeli');
//Route hapus
Route::get('/admin/pembeli/hapus/{id_pembeli}','PembeliController@delete');
//Route produk
Route::get('/admin/produk', 'ProdukController@viewproduk')->name('admin-produk');
Route::match(['get','post'], '/admin/produk/tambah', 'ProdukController@addproduk');
Route::get('/admin/produk/hapus/{id}', 'ProdukController@hapusproduk');
Route::get('/admin/produk/hapusimage/{id}','ProdukController@hapusimageproduk');
Route::match(['get','post'], '/admin/produk/edit/{id}', 'ProdukController@editproduk');

Route::post('/admin/produk/proses','ProdukController@proses_produk');
//Route pesanan tampil
Route::get('/admin/pesanan','PesananController@index')->name('admin-pesanan');
Route::get('/admin/pesanan/konfirmasi/{id}','PesananController@konfirmasi')->name('konfirmasi');
Route::get('/admin/pesanan/dikirim/{id}','PesananController@dikirim');
//route profile
Route::get('/admin/profile',function()
{
    return view('admin.content.profile');
})->name('admin-profile');

// END Route Admin
