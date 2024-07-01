<header>

    {{-- Questo è un commento blade, non si vedrà in browser --}}

    <!-- I commenti HTML sono visibili in pagina -->

    <div id="logo-wrapper">
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Partial utilizzato, copiato da quello di Luca ma è molto semplice da utilizzare :)</span>
        <p>Attualmente sei in: {{ Route::currentRouteName() }}</p>
    </div>

    <nav>
        {{-- I link usano i percorsi dichiarati nelle rotte --}}
        <a href="{{ route("home") }}">HOME</a>
        <a href="{{ route("nomeFileNascosto") }}">ABOUT</a>
    </nav>
    
</header>