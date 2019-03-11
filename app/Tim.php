<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = 'tim';

    protected $fillable = ['id', 'nama', 'jabatan', 'email', 'telp', 'jenis', 'tentang', 'fb', 'twitter','ig', 'foto' ];
}
