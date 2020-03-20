<section id="{{ get_sub_field('section_id') }}" class="block-counter section-content animate" data-animation="js-counter" style="background-color: {!! get_sub_field('bg_color') !!}">
    <div class="content">
        <h2 class="title">{!! get_sub_field('title') !!}</h2>
        <div class="counters">
            @foreach (get_sub_field('counter_rpt') as $counter)
            <div class="counter" style="border-color: {{ get_field('span_grp','option')['color'] }}">

                <p class="counter__things" data-number="{{ $counter['number_of'] }}" data-speed="{{ get_sub_field('speed') }}">0</p>
                <h3 class="counter__title">{!! $counter['title'] !!}</h2>
            </div>
            @endforeach

        </div>

    </div>
</section>
