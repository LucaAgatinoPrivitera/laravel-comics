<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics-singoloFumetto</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <div class="dettaglio-fumetto">
        <div class="details">
            <h1>{{ $fumetto['titolo'] }}</h1>
            <p>{{ $fumetto['descrizione'] }}</p>
            <p>{{ $fumetto['autore'] }}</p>
        </div>
    </div>
</body>

</html>
