<footer>
    <nav>
        <ul>
            <li><a href="/avvertenze">Avvertenze</a></li>
            <li><a href="mailto:{{ getenv('EMAIL_MASTER') }}">Webmaster</a></li>
        </ul>
    </nav>
    <p>P.Iva: {{ getenv('IVA_CODE') }} - CF: {{ getenv('TAX_CODE') }}</p>
</footer>
