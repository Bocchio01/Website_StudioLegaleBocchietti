@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => ''])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Home',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/feather_pen.jpg',
                'alt' => 'Feather pen image',
            ])

            <section>

                <p>
                    Lo {{ formatHelper::rendersStudioLegaleBocchietti() }} opera in Como ed esercita nei settori del diritto civile e del
                    diritto penale, destinando il proprio patrimonio di esperienza e di conoscenza ad una migliore e
                    sempre più puntuale risposta alle esigenze del cliente.
                </p>
                <p>
                    É formato dall'avvocato Claudio Bocchietti Abilitato alle Giurisdizioni Superiori, dall'avvocato
                    Gloria Bulanti oltre al personale di Segreteria.
                </p>

            </section>

        @include('_components.references')

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
