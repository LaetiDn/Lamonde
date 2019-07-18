<div class="hero page">
    <div class="bg-img" style="background-image: url('{{ $single_news->thumbnail["url"] }}')"></div>
</div>

<section id="single-event">
    <div class="single-event-inner">
        <div class="news-content">
            <div class="news-text">
                <span class="date">{!! get_field('event_date', get_the_ID()) !!}</span>
                <h2>{!! $events[0]->post_title !!}</h2>
                <div class="content">
                    {!! get_field('event_content', get_the_ID()) !!}
                </div>

                @if( ICL_LANGUAGE_CODE == "fr")
                    <a href="{{ '/evenements' }}" class="link">Retour à la liste</a>
                @else
                    <a href="{{ '/events' }}" class="link">Back to the list</a>
                @endif
            </div>
        </div>

    </div>
</section>
