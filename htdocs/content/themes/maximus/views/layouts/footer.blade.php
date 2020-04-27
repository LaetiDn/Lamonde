
<footer id="footer">
    @if(!empty(get_field('google_map_key', 'option')))
        @include('layouts.footer.map')
    @endif
    @include('layouts.footer.info')
</footer>
