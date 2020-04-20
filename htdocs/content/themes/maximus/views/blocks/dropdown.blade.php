<section id="{{ get_sub_field('section_id') }}" class="block-dropdown {{ get_sub_field('section_class') }}" style="background-color: {!! get_sub_field('bg_color') !!}">
    <div class="content-fullwidth">
        <div class="col-bg">
            @if(!empty(get_sub_field('events')))
                @foreach (get_sub_field('events') as $i => $event)
                    <img id="img-{{ $i }}" class="image @if($i == 0) active @endif" src="{{ $event['image']['url'] }}" alt="{{ $event['image']['alt'] }}">
                @endforeach
            @endif
        </div>
        <div class="col-txt default-padding">
            <h1 class="outlined">{!! get_sub_field('title') !!}</h1>
            @if(!empty(get_sub_field('events')))
                @foreach (get_sub_field('events') as $k => $event)
                    <div class="event @if($k == 0) active selected @endif">
                        <a class="event-link" href="#" data-index="{{ $k }}">
                            <h2 class="uppercase color-white">{{ $event['name'] }}</h2>
                        </a>
                        <div class="text body-text-sm">
                            {!! $event['description'] !!}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
