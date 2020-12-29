<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

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

        return response()->json([
            "data" => $usuarios,
            "status" => 200
        ], 200);
    }

    
    public function create()
    {
        
    }

    
    public function show(Usuario $usuario)
    {
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->clave = sha1($request->clave);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->direccion1 = $request->direccion1;
        $usuario->direccion2 = $request->direccion2;
        $usuario->empresa = $request->empresa;
        $usuario->ciudad = $request->ciudad;
        $usuario->provincia = $request->provincia;
        $usuario->codigo_postal = $request->codigo_postal;
        $usuario->pais = $request->pais;
        $usuario->telefono = $request->telefono;
        $usuario->save();

        return response()->json([
            "data" => $usuario,
            "mesagge" => "Usuario Registrado con Exito, puede inciar sesion",
            "status" => 200
        ], 200);
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
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
