<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table='kecamatan';

    protected $primaryKey='id_kec';

    protected $fillable = [
        'nama_kec', 'id_kabkot',
    ];

    public function kabkot(){
        return $this->belongsTo(KabKot::class,'id_kabkot','id_kabkot');
    }
}
