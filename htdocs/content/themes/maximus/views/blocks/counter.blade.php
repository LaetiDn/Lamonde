<section id="{{ get_sub_field('section_id') }}" class="block-counter section-content" style="background-color: {!! get_sub_field('bg_color') !!}">
        <div class="content">
            <h2 class="title">{!! get_sub_field('title') !!}</h2>
            <div class="counters">
                @foreach (get_sub_field('counter_rpt') as $counter)
                    <div class="counter">
                        
                        <p class="counter__things" data-number="{{ $counter['number_of'] }}" data-speed="{{ get_sub_field('speed') }}">0</span>
                        <h3 class="counter__title">{!! $counter['title'] !!}</h2>
                    </div>
                @endforeach

            </div>

        </div>
</section>
