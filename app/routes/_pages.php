<?php

app()->match('GET', '/', function () {
    render('pages.index');
});

app()->match('GET', '/curricula(/[a-z0-9_-]+)?', function ($curriculumSurname = '') {
    render('pages.curriculums', ['curriculumSurname' => $curriculumSurname]);
});

app()->match('GET', '/attività', function () {
    render('pages.activities');
});

app()->match('GET', '/contatti', function () {
    render('pages.contacts');
});

app()->match('GET', '/avvertenze', function () {
    render('pages.warnings');
});

// response()->download('path/to/file.zip', 'File name on client', 200);
