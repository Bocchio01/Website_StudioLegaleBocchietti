@php
$currentHost = "http://$_SERVER[HTTP_HOST]/";
@endphp

<header>

    <div class="intestazione">
        <a href="/">
            <h1>Studio Legale Bocchietti</h1>
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/curricula">Curricula</a></li>
            <li><a href="/attività">Attività</a></li>
            <li><a href="/contatti">Contatti</a></li>
        </ul>
    </nav>

    @if (isset($subtitle))
        <h2 style="text-align: right;">{{ $subtitle }}</h2>
    @endif

    <hr width="42%">

</header>
