<?php

namespace App\Evkin;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status_evkin';

    protected $fillable = ['poktan_id', 'status', 'kelembagaan_id', 'kelembagaan', 'gelombang'
    ];

    public function poktan()
    {
        // return $this->hasMany('App\Poktan');
        return $this->belongsTo('App\Poktan');
    }
    
}
