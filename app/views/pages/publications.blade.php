@php
    $currentHost = getenv('APP_URL') . '/';
    $fullPDFpath = isset($fileName) ? $currentHost . assets('pdf/' . $fileName) : '';
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => $publication ? 'Pubblicazione' : 'Pubblicazioni'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => $publication ? 'Pubblicazione' : 'Pubblicazioni',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/feather_pen.jpg',
                'alt' => 'Penna piumata',
            ])

            <section>

                @if ($publication == false)
                    <p>
                        Di seguito le pubblicazioni fatte dall'Avv. Claudio Bocchietti:
                    </p>
                    <ul>
                        <li><a href="/pubblicazioni/1">Il ricorso per la modifica del termine di esecuzione del rilascio
                                ha natura oppositiva agli atti esecutivi</a></li>
                    </ul>
                @else

                    <h3>{{ $title }}</h3>
                    <ul>
                        <li>Autore: {{ $author }}</li>
                        <li>Anno pubblicazione: {{ $year }}</li>
                    </ul>

                    <object data='{{ $fullPDFpath }}'>
                        <p>Il tuo browser non supporta la visualizzazione di file PDF.</p>
                        <p><a href="{{ $fullPDFpath }}">Clicca qui per scaricare il file PDF.</a></p>
                    </object>
                @endif

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
