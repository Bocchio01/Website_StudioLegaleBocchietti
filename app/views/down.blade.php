<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => 'Sito in manutenzione'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Sito in manutenzione',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/404.jpg',
                'alt' => 'Errore 404 image',
            ])

            <section>

                <p>
                    Il sito si trova attualmente in fase di manutenzione.<br>
                    Ti preghiamo di riprovare più tardi.
                </p>

            </section>

            @include('_components.address')

        </main>

        @include('_components.footer')

    </div>
</body>

</html>

