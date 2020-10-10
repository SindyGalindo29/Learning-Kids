<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pantallaPrincipal', function () {
    return view('pantallaPrincipal');
});

//español
Route::get('/Cuentos', function () {
    return view('Español/Cuentos');
});

Route::get('/tipodeCuento', function () {
    return view('Español/tipodeCuento');
});



Route::get('/pantallaPrincipalDeLaClaseDeEspañol', function () {
    return view('Español/pantallaPrincipalDeLaClaseDeEspañol');
});

//Adivinanzas - ESPAÑOL
Route::get('/Adivinanzas', function () {
    return view('Español/Adivinanzas');
});

Route::get('/tipoDeAdivinanza', function () {
    return view('Español/tipoDeAdivinanza'); //Adivinanzas De animales
});

Route::get('/tipoDeAdivinanzaFrutas', function () {
    return view('Español/tipoDeAdivinanzaFrutas');
});

Route::get('/tipoDeAdivinanzaNumeros', function () {
    return view('Español/tipoDeAdivinanzaNumeros');
});

Route::get('/tipoDeAdivinanzaTransporte', function () {
    return view('Español/tipoDeAdivinanzaTransporte');
});

Route::get('/tipoDeAdivinanzaCorta', function () {
    return view('Español/tipoDeAdivinanzaCorta');
});



//ciencias naturales
Route::get('/pantallaPrincipalDeLaClaseDeCienciasNaturales', function () {
    return view('CienciasNaturales/pantallaPrincipalDeLaClaseDeCienciasNaturales');
});


//otros ejemplos
Route::get('/otros', function () {
    return view('Español/otros');
});


