<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'cat_nombre',
        'cat_obs',
        'estado'
    ];
}
