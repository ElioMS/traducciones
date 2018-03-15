<?php

namespace App\Http\Controllers;

use App\Entity\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::All();
        // dd($posts);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'autor' => request('autor'),
            'enlace' => request('enlace')
        ]);

         // $post->save();
        $slug = str_slug(request('titulo'), '-');

        $locale = request('locale');

        $post->translateOrNew($locale)->titulo = request('titulo');
        $post->translateOrNew($locale)->descripcion = request('descripcion');
        $post->translateOrNew($locale)->slug = $slug;
        $post->translateOrNew($locale)->textos = $request->get('textos');
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->autor = request('autor');
        $post->enlace = request('enlace');
        $post->save();

        $slug = str_slug(request('titulo'), '-');

        $locale = request('locale');

        $post->translateOrNew($locale)->titulo = request('titulo');
        $post->translateOrNew($locale)->descripcion = request('descripcion');
        $post->translateOrNew($locale)->slug = $slug;
        $post->translateOrNew($locale)->textos = $request->get('textos');
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
