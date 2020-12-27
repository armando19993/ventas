<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        $datos = "";

        foreach ($clientes as $cliente){
            $datos .= "
            <tr>
            <th scope=row>". $cliente->id ."</th>
            <td>". $cliente->nombre ."</td>
            <td>". $cliente->tipo_documento ."-".$cliente->documento."</td>
            <td>Acciones</td>
            </tr>";
        }

        $tabla = "<tr></tr><th scope='col'>Id</th> <th scope='col'>Nombre</th> <th scope='col'>Documento</th> <th scope='col'>Acciones</th></tr>";
        return response()->json([
            "data" => $datos,
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
