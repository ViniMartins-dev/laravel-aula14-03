<?php

use App\Http\Controllers\MotosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json(['Sucesso'=>TRUE]);
});

// http://127.0.0.1:8000/api

Route::get('/moto',[MotosController::class,'index']);

Route::post('/moto', [MotosController::class,'store']);

// http://127.0.0.1:8000/api/motos