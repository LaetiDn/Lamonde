
<!-- Check if footer is disable on this page -->
@foreach(get_field("footer_disable", "option") as $page)
    @if($page->ID == get_the_ID())
        @php($disable = true)
    @else
        @php($disable = false)
    @endif
@endforeach

@if(!$disable)
    <footer id="footer">
        @if(!empty(get_field('google_map_key', 'option')))
            @include('layouts.footer.map')
        @endif
        @include('layouts.footer.info')
    </footer>
@endif