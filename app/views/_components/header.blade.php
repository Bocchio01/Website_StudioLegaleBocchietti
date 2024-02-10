@php
    $currentHost = "http://$_SERVER[HTTP_HOST]/";
@endphp

<header>

    <h1>
        <a href="/">Studio Legale Bocchietti</a>
    </h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/curricula">Curricula</a></li>
            <li><a href="/attività">Attività</a></li>
            <li><a href="/contatti">Contatti</a></li>
        </ul>

    </nav>

    <hr>

    @if (isset($subtitle))
        <h2>{{ $subtitle }}</h2>
    @endif

</header>
