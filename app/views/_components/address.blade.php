@php
    use App\Helpers\formatHelper;
@endphp

<address>
    {{ formatHelper::rendersStudioLegaleBocchietti() }}<br><br>
    <a href="https://maps.app.goo.gl/qp5u4bQz2zsERex3A" target="_blank">Via Volta 40, 22100 Como</a><br>
    Tel. <a href="tel:031264110">031/26.41.10</a><br>
    Fax 031/26.02.07<br><br>
    PEC <a href="mailto:{{ getenv('PEC_BOCCHIETTI') }}">{{ getenv('PEC_BOCCHIETTI') }}</a><br>
    Email <a href="mailto:{{ getenv('EMAIL_BOCCHIETTI') }}">{{ getenv('EMAIL_BOCCHIETTI') }}</a>
</address>
