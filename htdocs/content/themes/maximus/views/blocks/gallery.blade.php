<?php $slug = str_slug(get_sub_field('gallery_name').rand(0, 1000000), "-") ?>


<section id="{{ $slug }}" class="portfolio section-content {{ get_sub_field('section_class') }}" style="background-color: {{ get_sub_field('bg_color') }}">

    @if( get_sub_field('title') != "")
        <h2>{{ get_sub_field('title') }}</h2>
    @endif

    @if( get_sub_field('description') != "")
        <div class="content">
            <p class="description">
                {{ get_sub_field('description') }}
            </p>
        </div>
    @endif

    <div class="item-wrapper">
        @foreach (get_sub_field('items') as $item)
            <a href="{{$item['url']}}"
                class="item"
                data-lightbox="{{ $slug }}" data-title="{{$item['caption']}}">
                <div class="line line--top"></div>
                <div class="line line--bottom"></div>
                <div class="line line--left"></div>
                <div class="line line--right"></div>
                <img src="{{$item['url']}}">
            </a>
        @endforeach
    </div>
</section>
