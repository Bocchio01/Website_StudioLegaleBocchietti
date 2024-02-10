{{-- Robot.txt --}}

@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => 'Pubblicazione'])

<body>
    <div>

        @include('_components.header')

        <main>

            <section>

                <object data=<?php echo $fullPdfPath ?> type="application/pdf" width="100%" style="height:90vh; margin-block: 1em;">
                    <p>Impossibile visualizzare il PDF. <a href=<?php echo $fullPdfPath ?>>Scaricalo</a> per visualizzarlo.</p>
                </object>

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
