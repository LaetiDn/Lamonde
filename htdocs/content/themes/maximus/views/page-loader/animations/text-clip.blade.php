<div class="loader text-clip bgCover" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')" data-time="6500">
{{--<div class="loader text-clip bgCover" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')" data-time="5000">--}}
{{--<div class="loader text-clip bgCover" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('@if(get_field('pl_animations', 'option') !== 'text-clip') {{ get_field('pl_background_image', 'option') }}@endif')" data-time="5000">--}}
    <div class="loader-inner">
        <div class="overlay" style=""></div>
        {{--<div class="overlay" style="background-color: {{ get_field('pl_overlay_color', 'option') }}; opacity:{{ get_field('pl_overlay_opacity', 'option') }}"></div>--}}
        @include('page-loader.partials.content-wrapper')
    </div>
</div>
