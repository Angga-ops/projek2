<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Pesanan extends Model
{
    protected $table='detail_pesanan';

    protected $primaryKey='id_pesanan';

    protected $fillable = [
        'id_produk', 'jumlah_bayar', 'date_time',
    ];

    public function users(){
        return $this->belongsTo(User::class,'id','id');
    }

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk','id_produk');
    }
}
