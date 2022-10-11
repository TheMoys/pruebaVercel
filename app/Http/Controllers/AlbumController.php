<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumes = Album::all();
        return $albumes;
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
        $albumes = new Album();

        $albumes->titulo = $request->titulo;
        $albumes->publicacion = $request->publicacion;
        $albumes->imagen = $request->imagen;
        $albumes->id_artista = $request->id_artista;

        $albumes->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $albumes = Album::findOrFail($request->id);

        $albumes->titulo = $request->titulo;
        $albumes->publicacion = $request->publicacion;
        $albumes->imagen = $request->imagen;
        $albumes->id_artista = $request->id_artista;

        $albumes->save();

        return $albumes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $albumes = Album::destroy($request->id);

        return $albumes;
    }
}
