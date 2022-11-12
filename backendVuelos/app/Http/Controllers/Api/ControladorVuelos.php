<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class ControladorVuelos extends Controller
{
    public function index()
    {
        $vuelos = Vuelo::all();
        return $vuelos;
    }

    public function store(Request $request)
    {
        $vuelo = new Vuelo();
        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;
        $vuelo->precio = $request->precio;
        $vuelo->save();
    }

    public function show($id)
    {
        $vuelo = Vuelo::find($id);
        return $vuelo;
    }

    public function update(Request $request, $id)
    {
        $vuelo = Vuelo::findOrFail($request->id);
        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;
        $vuelo->precio = $request->precio;
        $vuelo->save();
        return $vuelo;
    }

    public function destroy($id)
    {
        $vuelo = Vuelo::destroy($id);
        return $vuelo;
    }
}
