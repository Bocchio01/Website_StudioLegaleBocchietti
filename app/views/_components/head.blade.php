@php
$title = ($title ? $title . ' | ' : '') . 'Studio Legale Bocchietti';
$description = $description ?? 'Sito web dello \'Studio Legale Bocchietti\', situato a Como (CO)';
$currentUrl = getenv('APP_URL') . "/$_SERVER[REQUEST_URI]";
$currentHost = getenv('APP_URL') . "/" ;
@endphp

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="Tommaso Bocchietti">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="{{ $currentUrl }}" />

    <meta name="description" content="{{ $description }}">
    <meta name="og:description" content="{{ $description }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta property="og:title" content="Studio Legale Bocchietti">
    <meta name="twitter:title" content="Studio Legale Bocchietti">

    <meta property="og:image" content="{{ $currentHost . assets('img/feather_pen.jpg') }}">
    <meta name="twitter:image" content="{{ $currentHost . assets('img/feather_pen.jpg') }}">
    <meta property="og:image:alt" content="{{ $title }}">
    <meta name="twitter:image:alt" content="{{ $title }}">

    <meta name="twitter:url" content="{{ $currentUrl }}">
    <meta property="og:url" content="{{ $currentUrl }}">
    <meta name="og:site_name" property="og:site_name" content="{{ $title }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/x-icon" href="{{ $currentHost . assets('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ $currentHost . assets('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ $currentHost . assets('favicon.ico') }}">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ $currentHost . assets('css/style.css') }}">

    <script src="{{ $currentHost . assets('js/app.js') }}" defer></script>

</head>
