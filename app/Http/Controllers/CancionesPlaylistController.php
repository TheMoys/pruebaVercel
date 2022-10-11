<?php

namespace App\Http\Controllers;

use App\Models\CancionesPlaylist;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CancionesPlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cancionesPlay= CancionesPlaylist::all();
        return $cancionesPlay;
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
        $cancionesPlay = new CancionesPlaylist();

        $cancionesPlay->id_usuario = $request->id_usuario;
        $cancionesPlay->id_cancion = $request->id_cancion;
        $cancionesPlay->id_playlist = $request->id_playlist;

        $cancionesPlay->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CancionesPlaylist  $cancionesPlaylist
     * @return \Illuminate\Http\Response
     */
    public function show(CancionesPlaylist $cancionesPlaylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CancionesPlaylist  $cancionesPlaylist
     * @return \Illuminate\Http\Response
     */
    public function edit(CancionesPlaylist $cancionesPlaylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CancionesPlaylist  $cancionesPlaylist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CancionesPlaylist $cancionesPlaylist)
    {
        $cancionesPlay = CancionesPlaylist::findOrFail($request->id);

        $cancionesPlay->id_usuario = $request->id_usuario;
        $cancionesPlay->id_cancion = $request->id_cancion;
        $cancionesPlay->id_playlist = $request->id_playlist;

        $cancionesPlay->save();

        return $cancionesPlay;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CancionesPlaylist  $cancionesPlaylist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cancionesPlay = CancionesPlaylist::destroy($request->id);

        return $cancionesPlay;
    }
}
