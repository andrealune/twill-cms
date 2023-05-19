@include('twill::partials.toaster')
<footer class="footer">
    <div class="container">
        <span class="footer__copyright"><a href="https://www.quattrolinee.it/" target="_blank" class="f--light-hover" tabindex="0">Made by quattrolinee</a></span>
        <span class="footer__version">{{ twillTrans('twill::lang.footer.version') . ' ' . config('app.version', '1.0') }}</span>
    </div>
</footer>
