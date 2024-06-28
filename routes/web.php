<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('welcome', $data);
});

Route::get('home', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('welcome', $data);
});

Route::get('nomeFileNascosto', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('about', $data);
});
