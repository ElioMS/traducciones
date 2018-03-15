<?php

namespace App\Http\Controllers;

use App\Entity\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        if ($about) {
            return view('about.create', compact('about'));
        }

        return view('about.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $about = About::create([
            'imagen' => request('imagen')
        ]);

        $locale = app()->getLocale();

        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $about->translateOrNew($locale)->titulo = request('titulo');
        $about->translateOrNew($newLocale)->titulo = request('titulo');
        $about->translateOrNew($locale)->descripcion = request('descripcion');
        $about->translateOrNew($newLocale)->descripcion = request('descripcion');
        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->validate(request(), [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $locale = app()->getLocale();

        $about->imagen = request('imagen');
        $about->save();

        $about->translateOrNew($locale)->titulo = request('titulo');
        $about->translateOrNew($locale)->descripcion = request('descripcion');
        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
