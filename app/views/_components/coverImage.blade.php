@php
$currentHost = "http://$_SERVER[HTTP_HOST]/";
@endphp

<div class="cover-image">
    <img src="{{ $currentHost . assets($src) }}" alt="{{ $alt ?? 'Studio Legale Bocchietti' }}"/>
</div>
