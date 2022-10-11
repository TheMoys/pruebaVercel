<?php

namespace App\Http\Controllers;

use App\Models\AlbumFavorito;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class AlbumFavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albumesFav = AlbumFavorito::all();
        return $albumesFav;
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
        $albumesFav = new AlbumFavorito();

        $albumesFav->id_usuario = $request->id_usuario;
        $albumesFav->id_album = $request->id_album;

        $albumesFav->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlbumFavorito  $albumFavorito
     * @return \Illuminate\Http\Response
     */
    public function show(AlbumFavorito $albumFavorito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlbumFavorito  $albumFavorito
     * @return \Illuminate\Http\Response
     */
    public function edit(AlbumFavorito $albumFavorito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlbumFavorito  $albumFavorito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlbumFavorito $albumFavorito)
    {
        $albumesFav = AlbumFavorito::find($request->id);

        $albumesFav->id_usuario = $request->id_usuario;
        $albumesFav->id_album = $request->id_album;

        $albumesFav->save();

        return $albumesFav;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlbumFavorito  $albumFavorito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $albumesFav = AlbumFavorito::destroy($request->id);

        return $albumesFav;
    }
}
