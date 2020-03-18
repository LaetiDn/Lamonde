<div class="content-wrapper">
{{--<div class="content-wrapper" style="background-image: url('{{ get_field('pl_background_image', 'option') }}')">--}}
    <img class="logo" src="{{ get_field('pl_logo', 'option')['url'] }}" alt="logo" style="width:{{ get_field('pl_logo_size', 'option') }}">
    <div class="txt-ctn">
        <h1 class="slogan" style="color:{!! get_field('pl_title_color', 'option') !!}">{!! get_field('pl_title', 'option') !!}</h1>
        <p class="subtitle" style="color:{!! get_field('pl_subtitle_color', 'option') !!}!important">{!! get_field('pl_subtitle', 'option') !!}</p>
    </div>
</div>