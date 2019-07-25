<section class="block-background-title animate" data-section="{{ get_sub_field('section_id') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor"></span>--}}
    <div class="background-ctn bgFixed" style="background-image: url('{{ get_sub_field('background')['url'] }}')">
        <div class="overlay" style="background-color: {{ get_sub_field('overlay_color') }}; opacity: {{ get_sub_field('overlay_opacity') }}"></div>
        <div class="title-ctn css-animation">
            <h2>{{ get_sub_field("title") }}</h2>
        </div>
    </div>
</section>
