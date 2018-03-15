<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use \Dimsav\Translatable\Translatable;

	protected $translatedAttributes = [
    	'titulo', 'descripcion', 'slug', 'textos'
    ];

    protected $fillable = [
    	 'autor', 'enlace'
    ];
}
