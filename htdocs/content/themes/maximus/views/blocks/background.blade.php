<section id="{{ get_sub_field('section_id') }}"
        class="block-background {{ get_sub_field('block_options') }}
        @if( ($animation['content_animation'] != 'none' && get_sub_field('block_options') != 'bg-only')
            || (get_sub_field("animation") != 'gen' && get_sub_field('block_options') != 'bg-only') )
            {{ 'animate' }}@endif"
        style="height: {{ get_sub_field('height') }}vh">

    <div class="block-background__background @if(get_sub_field('parallax')){{ 'is-parallax' }}@endif" style="background-image: url('{{ get_sub_field('background')['url'] }}'); background-color: {{ get_sub_field('background_color') }}">

        <div class="is-overlay" style="background-color: {{ get_sub_field('overlay_color') }}; opacity: {{ get_sub_field('overlay_opacity') }}"></div>

        @if(get_sub_field('block_options') === 'bg-title' || get_sub_field('block_options') === 'bgColor-title')
        <div class="block-background__title css-animation">
            <h2>{{ get_sub_field("title") }}</h2>
        </div>
        @elseif(get_sub_field('block_options') === 'bg-text' || get_sub_field('block_options') === 'bgColor-text')
        <div class="block-background__text css-animation {{ get_sub_field("animation") != 'gen' ? get_sub_field("animation") : $animation['content_animation']  }}" style="background-color: {{ get_sub_field('text_background_color') }}">
            {!! get_sub_field('text') !!}
        </div>
        @else

        @endif
    </div>
</section>
