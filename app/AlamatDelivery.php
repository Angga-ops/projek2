<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlamatDelivery extends Model
{
    protected $table='alamat_delivery';

    protected $primaryKey='id';

    protected $fillable = [
        'user_id', 'user_email', 'nama', 'no_hp', 'provinsi', 'kabkot', 'alamat', 'catatan',
    ];
}
