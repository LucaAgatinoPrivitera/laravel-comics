<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Template')</title>
    <link rel="stylesheet" href="/style.css">
    {{-- Da chiedere perché /? --}}
</head>

<body>

    @include('partials.header')

    <div class="content-wrapper">
        @yield('content', 'Yield fatto direttamente dal layout, non hai inserito niente in pagina')
    </div>

</body>

</html>
