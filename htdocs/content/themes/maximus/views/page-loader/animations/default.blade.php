<div class="loader default bgCover css-animation-step2" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')" data-time="5000">
    <div class="overlay" style="background-color: {{ get_field('pl_overlay_color', 'option') }}; opacity:{{ get_field('pl_overlay_opacity', 'option') }}"></div>
    @include('page-loader.partials.content-wrapper')
</div>

