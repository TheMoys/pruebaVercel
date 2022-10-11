<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return $usuarios;
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
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->clave = $request->clave;
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->nacimiento = $request->nacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->pais = $request->pais;
        $usuario->codigo_postal = $request->codigo_postal;
        $usuario->renovacion = $request->renovacion;

        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usuario = Usuario::findOrFail($request->id);

        $usuario->email = $request->email;
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->nacimiento = $request->nacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->pais = $request->pais;
        $usuario->codigo_postal = $request->codigo_postal;
        $usuario->renovacion = $request->renovacion;

        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $usuario = Usuario::destroy($request->id);
        return $usuario;
    }
}
