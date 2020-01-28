
<section id="{{ get_sub_field('section_id') }}" class="block-image-text {{ get_sub_field('block_options') }} @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="content noPadding @if(get_sub_field('reverse')) {{ 'reverse' }} @else {{ 'normal' }}@endif {{ get_sub_field('layout') }}" style="background-color: {{ get_sub_field('bg_color') }}">
        @if(!empty(get_sub_field("images")))
            <div class="block-image-text__slider image-ctn">
                @foreach (get_sub_field("images") as $i => $image_url)
                    <div class="block-image-text__slider-slide slide0{{ $i+1 }} @if($i == 0){{ 'active' }}@endif" style="background-image: url('{{ $image_url }}')"></div>
                @endforeach
                @if(count(get_sub_field("images")) > 1)
                <nav class="carrousel-nav">
                    <ul class="carrousel-nav__menu">
                    @foreach (get_sub_field("images") as $k => $image_url)
                        <li class="carrousel-nav__item @if($k == 0){{ 'active' }}@endif">
                            <button class="carrousel-nav__button" type="button" name="button" data-index="{{ $k+1 }}"></button>
                        </li>
                    @endforeach
                    </ul>
                </nav>
                @endif
            </div>
        @endif

        <div class="block-image-text__text">
            <div class="txt css-animation {!! get_sub_field("animation")!!}">
                {!! get_sub_field('text') !!}
            </div>
        </div>

    </div>
</section>
