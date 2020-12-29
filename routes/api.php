<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', [UsuarioController::class, 'index']);

Route::post("/usuarios/registrar", [UsuarioController::class, 'store'], function (Request $request){});
