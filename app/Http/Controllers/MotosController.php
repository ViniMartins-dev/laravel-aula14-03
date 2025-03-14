<?php

namespace App\Http\Controllers;

use App\Models\motos;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Validator;


class MotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registrosMoto = $request->All();

        $validaDados = Validator::make($registrosMoto, [
            'modelo'=>'required',
            'marca'=>'required',
            'ano'=>'required',
            'placa'=>'required',
            'cor'=>'required'
        ]);

        if($validaDados->fails()){
            return 'Registros faltantes: '.Response()->json([],Response::HTTP_NO_CONTENT);

        }

        $

        if(){

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(motos $motos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, motos $motos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motos $motos)
    {
        //
    }
}
