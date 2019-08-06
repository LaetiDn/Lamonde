@if( get_field('pl_animations', 'option') === 1)
<div class="loader bgCover css-animation-step2" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')">
    <div class="logo-wrapper css-animation-step1 ">
        <img class="logo" src="{{ get_field('pl_logo', 'option')['url'] }}" alt="logo">
        <div class="txt-ctn">
            <h1 class="slogan" style="color:{!! get_field('pl_title_color', 'option') !!}">{!! get_field('pl_title', 'option') !!}</h1>
            <p class="subtitle" style="color:{!! get_field('pl_title_color', 'option') !!}">{!! get_field('pl_subtitle', 'option') !!}</p>
        </div>
    </div>
</div>
@else
{{--<div class="loader split-animation">--}}
    {{--<div class="loader-wrapper">--}}
        {{--<div class="left">--}}
            {{--<div class="bg" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')"></div>--}}
        {{--</div>--}}
        {{--<div class="right">--}}
            {{--<div class="bg" style="background-color: {{ get_field('pl_background_color', 'option') }}; background-image: url('{{ get_field('pl_background_image', 'option') }}')"></div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}
    {{ "comming soon" }}
@endif