<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';

    protected $fillable = [
        'id',
        'nombre',
        'especie',
        'peso',
        'color',
        'edad'
    ];

    public function persona ()
    {
        return $this->belongsTo('App\Persona','persona_id');
    }
}
