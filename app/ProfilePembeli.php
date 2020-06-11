<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProfilePembeli extends Model
{
    use Notifiable;

    protected $table='profile_pembeli';

    protected $primaryKey='id';

    protected $fillable = [
        'id_users', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'alamat', 'image',
    ];

    public function users(){
        return $this->belongsTo(User::class,'id_users','id');
    }
}
