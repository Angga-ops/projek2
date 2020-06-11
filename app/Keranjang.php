<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table='cart';

    protected $primaryKey='id_keranjang';

    protected $fillable = [
        'id_produk', 'nama_produk', 'kode_produk', 'harga', 'qty', 'user_email', 'session_id',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk','id_produk');
    }
}
