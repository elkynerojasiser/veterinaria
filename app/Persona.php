<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'apellido',
        'direccion',
        'telefono'
    ];

    public function mascotas ()
    {
        return $this->hasMany('App\Mascota','persona_id');
    }
}
