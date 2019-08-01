<section class="block-background-title @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif" data-section="{{ get_sub_field('section_id') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor"></span>--}}
    <div class="background-ctn bgFixed css-animation" style="background-image: url('{{ get_sub_field('background')['url'] }}')">
    </div>
</section>
