<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk_Detail extends Model
{
    protected $table='detail_produk';

    protected $primaryKey='id';

    protected $fillable = [
        'id_produk', 'sku', 'size', 'harga', 'stok',
    ];

    public function produk(){
        return $this->belongsTo(Kategori::class,'id_produk','id_produk');
    }
}
