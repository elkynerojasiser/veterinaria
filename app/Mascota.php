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
        'color_id',
        'edad',
        'persona_id'
    ];

    public function persona ()
    {
        return $this->belongsTo('App\Persona','persona_id');
    }

    public function color()
    {
        return $this->belongsTo('App\Color','color_id');
    }
}
