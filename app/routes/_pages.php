<?php

app()->match('GET', '/', function () {
    render('pages.index');
});

app()->match('GET', '/curricula(/[a-z0-9_-]+)?', function ($curriculumSurname = '') {

    switch (strtolower($curriculumSurname)) {
        case 'bocchietti':
            render('pages.curriculums',
            [
                'curriculum' => 'bocchietti',
                'coverImage' => [
                    'src' => 'img/bocchietti.jpg',
                    'alt' => 'Claudio Bocchietti'
                ]]);
            break;

        case 'bulanti':
            render('pages.curriculums',
            [
                'curriculum' => 'bulanti',
                'coverImage' => [
                    'src' => 'img/bulanti.png',
                    'alt' => 'Gloria Bulanti'
                ]]);
            break;

        case '':
            render('pages.curriculums',
            [
                'curriculum' => false,
                'coverImage' => [
                    'src' => 'img/feather_pen.jpg',
                    'alt' => 'Penna piumata'
                    ]]);
            break;


        default:
            app()->push('/curricula');
            break;
    }
});

app()->match('GET', '/attivita', function () {
    render('pages.activities');
});

app()->match('GET', '/contatti', function () {
    render('pages.contacts');
});

app()->match('GET', '/avvertenze', function () {
    render('pages.warnings');
});

app()->match('GET', '/pubblicazioni(/\d+)?', function ($publication = false) {

    switch ($publication) {
        case 1:
            render('pages.publications',
            [
                'publication' => true,
                'id' => 1,
                'title' => 'Il ricorso per la modifica del termine di esecuzione del rilascio ha natura oppositiva agli atti esecutivi',
                'author' => 'Claudio Bocchietti',
                'year' => '2005',
                'fileName' => '1_publication.pdf',
            ]);
            break;

        case false:
            render('pages.publications', ['publication' => false]);
            break;

        default:
            app()->push('/pubblicazioni');
            break;
    }
});

app()->match('GET', '/download/([a-z0-9_-]+)?', function ($file = false) {

        switch ($file) {
            case 'bocchietti':
                response()->download(
                    assets('pdf/CV_Bocchietti.pdf'),
                    'CurriculumVitae_Bocchietti.pdf',
                    200);
                break;

            case 1:
                response()->download(
                    assets('pdf/1_publication.pdf'),
                    'Il_ricorso_per_la_modifica_del_termine_di_esecuzione_del_rilascio_ha_natura_oppositiva_agli_atti_esecutivi.pdf',
                    200);
                break;

            default:
                app()->push('/');
                break;
        }
});

// response()->download('path/to/file.zip', 'File name on client', 200);
