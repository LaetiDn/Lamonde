<section id="{{ get_sub_field('gallery_name') }}" class="portfolio section-content {{ get_sub_field('section_class') }}">

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
            <a href="{{$item['image']}}"
                class="item"
                data-lightbox="{{ get_sub_field('gallery_name') }}" data-title="{{$item['caption']}}">
                <div class="line line--top"></div>
                <div class="line line--bottom"></div>
                <div class="line line--left"></div>
                <div class="line line--right"></div>
                <img src="{{$item['image']}}">
            </a>
        @endforeach
    </div>
</section>
