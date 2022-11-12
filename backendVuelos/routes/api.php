<?php

use App\Http\Controllers\Api\ControladorVuelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ControladorVuelos::class)->group(function(){
    Route::get('/vuelos','index');
    Route::post('/vuelo','store');
    Route::get('/vuelo/{id}','show');
    Route::put('/vuelo/{id}','update');
    Route::delete('/vuelo/{id}','destroy');
});
