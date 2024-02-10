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

                    <p>Clicca qui per <a href="/download/{{ $id }}" >scaricare il documento.</a></p>

                    <h3>{{ $title }}</h3>
                    <ul>
                        <li>Autore: {{ $author }}</li>
                        <li>Anno pubblicazione: {{ $year }}</li>
                    </ul>

                    <object data='{{ $fullPDFpath }}'>
                        <p>Questo browser non supporta la visualizzazione di file PDF.</p>
                        <p>Scarica il documento dal link sopra.</p>
                    </object>
                @endif

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
