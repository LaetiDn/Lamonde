<section id="{{ get_sub_field('section_id') }}" class="testimonial section-content {{ get_sub_field('section_class') }}" style="background-color: {!! get_sub_field('bg_color') !!}">
    <div class="content">
        @if( get_sub_field('title') != "")
            <h2>{{ get_sub_field('title') }}</h2>
        @endif

        @if( get_sub_field('description') != "")
            <p class="description">
                {{ get_sub_field('description') }}
            </p>
        @endif
    </div>
    <div class="content items">
        @if(!empty(get_sub_field('items')))
        @foreach (get_sub_field('items') as $item)
            <div class="item">
                <div class="item-inner"
                onMouseOver="this.style.backgroundColor='{!! get_sub_field('item_bg_color') !!}'"
                onMouseOut="this.style.backgroundColor='{!! get_sub_field('bg_color') !!}'">
                    <div class="people" style="background-image: url({{$item['people']}})"></div>
                    <h3 class="title">{{$item['name']}}</h3>
                    <p class="text">
                        {{$item['quote']}}
                    </p>
                </div>
            </div>
        @endforeach
        @endif
    </div>

</section>
