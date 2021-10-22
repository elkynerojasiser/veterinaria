<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colores';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public function mascotas() {
        return $this->hasMany('App\Mascota','color_id');
    }
}
