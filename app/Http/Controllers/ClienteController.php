<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente = Cliente::all();
        $tabla = "<th scope='col'>Id</th> <th scope='col'>Nombre</th> <th scope='col'>Documento</th> <th scope='col'>Acciones</th>";
        return response()->json([
            "data" => $cliente,
            "tabla" => $tabla,
            "status" => 200
        ], 200);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Cliente $cliente)
    {
        //
    }


    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    public function destroy(Cliente $cliente)
    {
        //
    }
}
