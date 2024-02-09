@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => 'Curriculum'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Curriculum',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/feather_pen.jpg',
                'alt' => 'Feather pen image',
            ])

            <section>

                Di seguito i curricula degli avvocati presenti nello {{ formatHelper::rendersStudioLegaleBocchietti() }}:

                <ul>
                    <li><a href="/curricula/bocchietti">Avvocato Claudio Bocchietti</a></li>
                    <li><a href="/curricula/bulanti">Avvocato Gloria Bulanti</a></li>
                </ul>

            </section>

            @include('_components.address')

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
