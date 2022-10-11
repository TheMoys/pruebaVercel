<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canciones = Cancion::all();
        return $canciones;
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
        $canciones = new Cancion();

        $canciones->titulo = $request->titulo;
        $canciones->duracion = $request->duracion;
        $canciones->reproducciones = $request->reproducciones;
        $canciones->id_album = $request->id_album;

        $canciones->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $canciones)
    {
        $canciones = Cancion::findOrFail($request->id);

        $canciones->titulo = $request->titulo;
        $canciones->duracion = $request->duracion;
        $canciones->reproducciones = $request->reproducciones;
        $canciones->id_album = $request->id_album;

        $canciones->save();

        return $canciones;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $canciones = Cancion::destroy($request->id);

        return $canciones;
    }
}
