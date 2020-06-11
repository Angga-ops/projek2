<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfbayar extends Model
{
    protected $table='transaksi';
    protected $primaryKey='id_transaksi';

    protected $fillable = [
        'id_pesanan', 'bank_asal', 'nama_pemilik_rek', 'jumlah_bayar', 'bukti_bayar', 'date_time',
    ];
    protected $guarded=[];
    public $timestamps=false;
}
