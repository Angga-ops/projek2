<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='keranjang';

    protected $primaryKey='id_keranjang';

    protected $fillable = [
        'id_users', 'id_produk', 'qty', 'session_id',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk','id_produk');
    }

    public function users(){
        return $this->belongsTo(User::class,'id_produk','id_produk');
    }
}
