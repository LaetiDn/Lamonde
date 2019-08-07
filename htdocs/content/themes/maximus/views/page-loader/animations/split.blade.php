<div class="loader split-animation" data-time="7000">

    <div class="side-ctn">
        <div class="side left" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')"></div>
        <div class="side right" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')"></div>
    </div>

    <div class="logo-wrapper">
        <img class="logo" src="{{ get_field('pl_logo', 'option')['url'] }}" alt="logo">
        <div class="txt-ctn">
            <h1 class="slogan" style="color:{!! get_field('pl_title_color', 'option') !!}">{!! get_field('pl_title', 'option') !!}</h1>
            <p class="subtitle" style="color:{!! get_field('pl_title_color', 'option') !!}">{!! get_field('pl_subtitle', 'option') !!}</p>
        </div>
    </div>
</div>