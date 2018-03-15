<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'titulo', 'descripcion'
    ];
}
