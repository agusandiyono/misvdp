<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    protected $table = 'jenis_kegiatan';

    protected $fillable = [
        'jenis_kegiatan', 
    ];

    public function kegiatan()
    {
        return $this->hasMany('App\Kegiatan');
    }
}
