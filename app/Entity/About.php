<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'about';

    protected $translatedAttributes = [
        'titulo', 'descripcion'
    ];

    protected $fillable = [
        'imagen'
    ];
}
