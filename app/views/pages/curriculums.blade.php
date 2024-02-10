@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => $curriculum ? ucfirst($curriculum) : 'Curricula'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => $curriculum ? 'Curriculum Vitae ' . ucfirst($curriculum) : 'Curricula',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => $coverImage['src'],
                'alt' => $coverImage['alt'],
            ])

            <section>

                @if ($curriculum == false)
                    <p>
                        Di seguito i curricula degli avvocati presenti nello
                        {{ formatHelper::rendersStudioLegaleBocchietti() }}:
                    </p>

                    <ul>
                        <li><a href="/curricula/bocchietti">Avv. Claudio Bocchietti</a></li>
                        <li><a href="/curricula/bulanti">Avv. Gloria Bulanti</a></li>
                    </ul>
                @else
                    @include('pages.curriculums.' . $curriculum)
                @endif

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
