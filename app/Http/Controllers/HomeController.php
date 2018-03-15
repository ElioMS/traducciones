<?php

namespace App\Http\Controllers;

use App\Entity\About;
use Illuminate\Http\Request;

use App\Entity\Post;

class HomeController extends Controller
{
	public function index()
	{
		$posts = Post::All();

   		return view('publicaciones.listado')->with(compact('posts'));
	}


	public static function translate($language, $parameters)
	{
        // dd($parameters[0]['name']);
		$post = Post::whereTranslation($parameters[0]['name'], $parameters[0]['value'])->first();
		$slug = $post->translate($language)->slug;
		return $slug;
	}

    public function detail($slug, $language = null)
    {
    	$data['post'] = Post::whereTranslation('slug', $slug)->first();

    	return view('publicaciones.detalle', $data);
    }

    public function formulario()
    {
    	$view = view('form')->render();
    	return response()->json($view);
    }

    public function about()
    {
        $about = About::first();
        return view('about', compact('about'));
    }
}
