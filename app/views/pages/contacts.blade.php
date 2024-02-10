@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => 'Contatti'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Contatti',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/feather_pen.jpg',
                'alt' => 'Feather pen image',
            ])

            <section>

                <p>
                    Di seguito i recapiti degli avvocati presenti nello {{ formatHelper::rendersStudioLegaleBocchietti() }}:
                </p>

                <ul>
                    <li><a href="mailto:{{ getenv('EMAIL_BOCCHIETTI') }}">Avv. Claudio Bocchietti</a></li>
                    <li><a href="mailto:{{ getenv('EMAIL_BULANTI') }}">Avv. Gloria Bulanti</a></li>
                </ul>

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
