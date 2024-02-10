@php
$currentHost = getenv('APP_URL') . "/" ;
@endphp

<div class="cover-image">
    <img src="{{ $currentHost . assets($src) }}" alt="{{ $alt ?? 'Studio Legale Bocchietti' }}"/>
</div>
