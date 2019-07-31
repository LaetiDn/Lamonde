@if(!is_single())
<div id="hero" class="hero @if(!get_field("use_a_slider", get_the_ID())){{ 'page' }} @endif">
    <div class="overlay"></div>
    @if(get_field("use_a_slider", get_the_ID()))
        <div class="logo-ctn">
            <img class="big-logo" src="{{ get_field("header_logo", get_the_ID())["url"] }}" alt="logo">
        </div>
        <div class="header-slider">
            @if(!empty( get_field("header_slider_image", get_the_ID()) ))
                @foreach( get_field("header_slider_image", get_the_ID() ) as $img)
                    <div class="slide" style="background-image: url('{{ $img['url'] }}')"></div>
                @endforeach
            @endif
        </div>
        <div class="slider-progress">
            <div class="progress"></div>
        </div>
    @else
        <div class="bg-img" style="background-image: url('{{ get_field("header_image_background")["url"] }}')">
            <h1>{{ get_field("header_image_title"), get_the_ID() }}</h1>
        </div>
    @endif
</div>
@endif