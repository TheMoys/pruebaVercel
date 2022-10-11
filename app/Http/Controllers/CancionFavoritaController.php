<?php

namespace App\Http\Controllers;

use App\Models\CancionFavorita;
use Illuminate\Http\Request;

class CancionFavoritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cancionesFav = CancionFavorita::all();
        return $cancionesFav;
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
        $cancionesFav = new CancionFavorita();

        $cancionesFav->id_usuario = $request->id_usuario;
        $cancionesFav->id_cancion = $request->id_cancion;

        $cancionesFav->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CancionFavorita  $cancionFavorita
     * @return \Illuminate\Http\Response
     */
    public function show(CancionFavorita $cancionFavorita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CancionFavorita  $cancionFavorita
     * @return \Illuminate\Http\Response
     */
    public function edit(CancionFavorita $cancionFavorita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CancionFavorita  $cancionFavorita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CancionFavorita $cancionFavorita)
    {
        $cancionesFav = CancionFavorita::findOrFail($request->id);

        $cancionesFav->id_usuario = $request->id_usuario;
        $cancionesFav->id_cancion = $request->id_cancion;

        $cancionesFav->save();

        return $cancionesFav;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CancionFavorita  $cancionFavorita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cancionesFav = CancionFavorita::destroy($request->id);

        return $cancionesFav;
    }
}
