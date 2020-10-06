<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Novedad extends Model
{
    use SoftDeletes;
    protected $table = 'news';

    protected $fillable = [
        'titulo','descripcion', 'activo'
    ];

    //Get files for the novedad
    public function files()
    {
        return $this->hasMany('App\Models\File')->orderBy('created_at');
    }
}
