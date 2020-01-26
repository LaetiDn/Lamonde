
<!-- Check if footer is disable on this page -->
{{-- @php($disable = "")
@foreach(get_field("footer_disable", "option") as $page)
    @if($page->ID === get_the_ID())
        @php($disable = "disable")
        @break
    @endif
@endforeach --}}



{{-- @if($disable != "disable") --}}
<footer id="footer">
    @if(!empty(get_field('google_map_key', 'option')))
        @include('layouts.footer.map')
    @endif
    @include('layouts.footer.info')
</footer>
{{-- @endif --}}
