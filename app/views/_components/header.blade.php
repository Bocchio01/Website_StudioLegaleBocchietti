<header>

    <h1>
        <a href="/">Studio Legale Bocchietti</a>
    </h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/curricula">Curricula</a></li>
            <li><a href="/attivita">Attività</a></li>
            <li><a href="/pubblicazioni">Pubblicazioni</a></li>
            <li><a href="/contatti">Contatti</a></li>
        </ul>

    </nav>

    <hr>

    @if (isset($subtitle))
        <h2>{{ $subtitle }}</h2>
    @endif

</header>
