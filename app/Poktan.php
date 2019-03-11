<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evkin;

class Poktan extends Model
{
    protected $table = 'poktan';

    protected $fillable = ['id', 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'nama_kelompok', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function evkin()
    {        
        // return $this->belongsTo('App\Evkin', 'poktan_id');
        return $this->hasMany('App\Evkin', 'poktan_id');
    }

    
}
