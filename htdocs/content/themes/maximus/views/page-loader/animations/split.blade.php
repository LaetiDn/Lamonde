<div class="loader split-animation" data-time="7000">
    <div class="overlay" style="background-color: {{ get_field('pl_overlay_color', 'option') }}; opacity:{{ get_field('pl_overlay_opacity', 'option') }}; z-index:1;"></div>
    <div class="side-ctn">
        <div class="side left" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image_left', 'option') }}')"></div>
        <div class="side right" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image_right', 'option') }}')"></div>
    </div>

    @include('page-loader.partials.content-wrapper')

</div>