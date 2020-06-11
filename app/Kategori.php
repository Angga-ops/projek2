<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategori';

    protected $primaryKey='id_kategori';

    protected $fillable = [
        'nama_kategori', 'sub_kat', 'deskripsi', 'url', 'status',
    ];

    public function kategori(){
        return $this->hasMany('App\Kategori','sub_kat');
    }

}
