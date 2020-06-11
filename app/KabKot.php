<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KabKot extends Model
{
    protected $table='kabkot';

    protected $primaryKey='id_kabkot';

    protected $fillable = [
        'nama_kabkot', 'id_provinsi',
    ];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class,'id_provinsi','id_provinsi');
    }
}
