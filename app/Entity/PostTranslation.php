<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'nombre', 'descripcion', 'slug', 'textos'
    ];

    protected $casts = [
    	'textos' => 'array'
    ];
}
