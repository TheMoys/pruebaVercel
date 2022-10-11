<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return $artistas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artistas = new Artista();

        $artistas->nombre = $request->nombre;
        $artistas->imagen = $request->imagen;
        $artistas->id_genero = $request->id_genero;

        $artistas->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artistas)
    {
        $artistas = Artista::findOrFail($request->id);

        $artistas->nombre = $request->nombre;
        $artistas->imagen = $request->imagen;
        $artistas->id_genero = $request->id_genero;

        $artistas->save();

        return $artistas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $artista = Artista::destroy($request->id);

        return $artista;
    }
}
