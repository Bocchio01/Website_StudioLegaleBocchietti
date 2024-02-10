<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => ''])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Errore 404',
        ])

        <main>

            {{-- @include('_components.coverImage', [
                'src' => 'img/404.jpg',
                'alt' => 'Errore 404 image',
            ]) --}}

            <section>

                <p>
                    La pagina che stavi cercando sembrerebbe non eistere.
                </p>
                <p>
                    <a href="/">Clicca qui</a> per tornare alla home page del sito.
                </p>

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
