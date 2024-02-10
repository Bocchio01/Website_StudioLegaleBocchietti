@php
    use App\Helpers\formatHelper;
@endphp

<!DOCTYPE html>
<html lang="it">

@include('_components.head', ['title' => 'Attività'])

<body>
    <div>

        @include('_components.header', [
            'subtitle' => 'Attività',
        ])

        <main>

            @include('_components.coverImage', [
                'src' => 'img/feather_pen.jpg',
                'alt' => 'Feather pen image',
            ])

            <section>

                <section>
                    <b>Nell'ambito del Diritto Civile</b> diritto della responsabilità civile per colpa con particolare
                    riferimento alla difesa di personale medico e infermieristico e alla difesa di strutture
                    ospedaliere; diritto delle assicurazioni, in particolare per la R.C.; diritto delle obbligazioni e
                    dei contratti (vendita, appalto, ecc.); diritto delle successioni; diritto dell'esecuzione civile
                    (recupero dei crediti o difesa di debitori) compreso il diritto delle procedure concorsuali; diritto
                    della proprietà, del condominio e delle locazioni; diritto del lavoro e della previdenza sociale;
                    diritto delle contravvenzioni amministrative ex L. 689/81; diritto delle procedure cautelari e
                    d'urgenza; diritto sportivo; assistenza e consulenza stragiudiziale.
                </section>

                <br>

                <section>
                    <b>Nell'ambito del Diritto Penale</b> reato di omicidio colposo e reato di lesioni colpose con
                    particolare riferimento alla difesa di personale medico ed infermieristico e alla difesa (quali
                    responsabili civili) di strutture ospedaliere; reati contro la persona compresi i reati di omicidio
                    colposo e di lesioni colpose derivanti dalla circolazione stradale o dalla violazione della
                    normativa di sicurezza negli ambienti di lavoro (infortuni sul lavoro); reati contro la libertà
                    individuale compresi i reati sessuali; reati contro l'economia compresa la bancarotta fraudolenta e
                    gli altri reati fallimentari; reati in materia fiscale, reati contro l'ambiente (inquinamento),
                    reati contro la pubblica amministrazione; reati contro il patrimonio (furto, ricettazione,
                    riciclaggio, truffa, circonvenzione di incapaci, ecc).
                </section>

            </section>

        </main>

        @include('_components.footer')

    </div>
</body>

</html>
