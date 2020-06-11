<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='produk';

    protected $primaryKey='id_produk';

    protected $fillable = [
        'nama_produk', 'harga', 'kode_produk', 'id_kategori', 'image', 'deskripsi',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori','id_kategori');
    }

    public function atribut(){
        return $this->hasMany('App\Produk_Detail','id_produk');
    }

    public function produk(){
        return $this->hasMany('App\Keranjang','id_produk');
    }

    public function scopeSearch($query , $s){
        return $query->where('nama_produk','like','%'.$s.'%')->orWhere('deskripsi','like','%'.$s.'%');
    }

}
