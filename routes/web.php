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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return "Hola desde la página de inicio";
});*/

/*
//Parámetros obligatorios
Route::get('saludo/{nombre}', function($nombre) {
    return "Hola ". $nombre;
});

//Parámetros opcionales
Route::get('despedida/{nombre?}', function($nombre = "Invitado") {
    return "Hola ". $nombre;
});

Route::get('contactame', function() {
    return "Sección de contacto";
})->name('contacto');

Route::get('/', function () {
    echo "<a href='" . route('contacto') . "'>Contacto 1</a><br>";
    echo "<a href='" . route('contacto') . "'>Contacto 2</a><br>";
    echo "<a href='" . route('contacto') . "'>Contacto 3</a><br>";
});
*/

/*Route::get('/', function() {
    $nombre = "Jorge";
    //return view('home')->with('nombre', $nombre); //Como parámetro
    //return view('home')->with(['nombre' => $nombre]); //Como array
    //return view('home', ['nombre' => $nombre]); //Array como parámetro de la funcion View
    return view('home', compact('nombre')); //Usando función compact (Devuelve array con el parámetro)
})->name('home');*/

//Para mostrar páginas que no requieren tanta lógica
/*Route::view('/', 'home')->name('home');
Route::view('/', 'home', ['nombre' => 'Andres']);*/

$portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4']
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');

Route::view('/contact', '/contact')->name('contact');