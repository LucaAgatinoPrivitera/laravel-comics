<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @include('partials.header')

    <h1>Ciao prova</h1>
    <div>
        <a href="/">Funziona con /</a>
        <a href="/home">Funziona con /home</a>
        <a href="/nomeFileNascosto">Funziona con /home</a>
        <hr>
        <h1>Milestone 2</h1>

        <div class="container_card">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <h1>Titolo: {{ $fumetto['titolo'] }}</h1>
                    <h2>{{ $fumetto['descrizione'] }}</h2>
                    <h3>Autore: {{ $fumetto['autore'] }}</h3>
                </div>
            @endforeach

        </div>


    </div>

</body>

</html>
