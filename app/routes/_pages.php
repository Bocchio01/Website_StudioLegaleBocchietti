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

        default:
            render('pages.curriculums',
            [
                'curriculum' => false,
                'coverImage' => [
                    'src' => 'img/feather_pen.jpg',
                    'alt' => 'Feather pen image'
                ]]);
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

// response()->download('path/to/file.zip', 'File name on client', 200);
