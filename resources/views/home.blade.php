{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
    <link rel="stylesheet" href="/style.css">
    {{-- Da chiedere perché /? --}}
{{-- </head> --}}

{{-- <body> --}}

{{-- Questi commenti sono per ricordare il codice precedente, praticamente quando uso un layout non ho più codice in pagina se non extends e section
    Con un partial ho un blocco che non può mutare, rimane sempre uguale. Ma con un layout io posso dirgli di cambiare i suoi valori --}}

@extends('layouts.layout')


@section('content')
    <h1>ciao</h1>
    <h2>Benvenuto nella home page</h2>
    <div class="container_card">
        @foreach ($fumetti as $key => $fumetto)
            <div class="card">
                <h1>Titolo: {{ $fumetto['titolo'] }}</h1>
                <h2>{{ $fumetto['descrizione'] }}</h2>
                <h3>Autore: {{ $fumetto['autore'] }}</h3>
                <a href="/home/{{ $key }}">Cliccami per avere la pagina dedicata</a>
            </div>
        @endforeach

    </div>

    <p>Attualmente sei in: {{ Route::currentRouteName() }}</p>
@endsection


{{-- <h1>Ciao prova</h1>
    <div>
        <a href="/">Funziona con /</a>
        <a href="/home">Funziona con /home</a>
        <a href="/nomeFileNascosto">Funziona con /about</a>
        <hr>
        <h1>Milestone 2</h1>

        {{-- <div class="container_card">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <h1>Titolo: {{ $fumetto['titolo'] }}</h1>
                    <h2>{{ $fumetto['descrizione'] }}</h2>
                    <h3>Autore: {{ $fumetto['autore'] }}</h3>
                </div>
            @endforeach

        </div> --}}


{{-- </div> --}}

{{-- </body> --}}

{{-- </html> --}}
