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

    return view('home', $data);
})->name("home");
// Grazie al name posso assegnare un nome che rimane uguale sempre, se un giorno dovessi modificare la riga del return, non dovrei modificare poi niente in pagina, perché sarebbe sempre accessibile da <a href="{{ route("home") }}">HOME</a>

Route::get('home', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('home', $data);
})->name("home");

Route::get('nomeFileNascosto', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('about', $data);
})->name("nomeFileNascosto");

Route::get('comicSingolo', function () {
    // Milestone 2 richiede un file a parte
    // $data = [
    //     "msg" => "Ciao questo è un messaggio dell'array \$data",
    //     "titolo" => "The Boys",
    //     "autore" => "Garth Ennis"
    // ];
    $data = config("store");

    return view('comic', $data);
})->name("comicSingolo");



Route::get('/home/{indice}', function($key) {

    $fumetti = config("store.fumetti"); // .fumetti ???
    
    $data = [
        "fumetto" => $fumetti[$key] //EXTRA: controllare se $indice è un valore valido
    ];

    return view('comicSingolo', $data);
})->name("comics-details");

// Da chiedere, quindi io qui creo un altra ruote, che prende da home e aggiunge l'indice... ma ora che lo guardo quell'indice da dove viene preso? io ho key ma funziona comunque... tornando a noi tra function metto key così mi prende la key della pagina che ho realizzato mettendo "@foreach ($fumetti as $key => $fumetto)" grazie al key =>.