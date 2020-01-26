{{-- <section class="block-image-text @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif" data-section="{{ get_sub_field('section_id') }}" style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content-ctn noPadding @if(get_sub_field('reverse')) {{ 'reverse' }} @else {{ 'normal' }}@endif {{ get_sub_field('layout') }}">
        @if(!empty(get_sub_field("image")))
            <div class="image-ctn bgCover" style="background-image: url('{{ get_sub_field("image") }}')"></div>
        @endif
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn section-content">
            <div class="txt css-animation {!! get_sub_field("animation")!!}">
                {!! get_sub_field("wysywyg")!!}
            </div>
        </div>
        @endif
    </div>
</section> --}}

<section id="{{ get_sub_field('section_id') }}" class="block-image-text {{ get_sub_field('block_options') }} @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="content noPadding @if(get_sub_field('reverse')) {{ 'reverse' }} @else {{ 'normal' }}@endif {{ get_sub_field('layout') }}">

        @if(!empty(get_sub_field("image")))
            <div class="image-ctn bgCover" style="background-image: url('{{ get_sub_field("image") }}')"></div>
        @endif
        {{-- <div class="image-ctn">
            <div class="image active slide01" style="background-image: url('/content/themes/library/dist/placeholders/403-900x900.jpg')"></div>
            <div class="image slide02" style="background-image: url('/content/themes/library/dist/placeholders/404-900x900.jpg')"></div>
            <div class="image slide03" style="background-image: url('/content/themes/library/dist/placeholders/405-900x900.jpg')"></div>
            <nav class="carrousel-nav">
                <ul class="carrousel-nav__menu">
                    <li class="carrousel-nav__item active">
                        <button class="carrousel-nav__button" type="button" name="button" data-index="1"></button>
                    </li>
                    <li class="carrousel-nav__item">
                        <button class="carrousel-nav__button" type="button" name="button" data-index="2"></button>
                    </li>
                    <li class="carrousel-nav__item">
                        <button class="carrousel-nav__button" type="button" name="button" data-index="3"></button>
                    </li>
                </ul>
            </nav>
        </div> --}}

        <div class="text wysywyg-ctn section-content">
            <div class="txt css-animation {!! get_sub_field("animation")!!}">
                {!! get_sub_field('text') !!}
            </div>
        </div>

    </div>
</section>
