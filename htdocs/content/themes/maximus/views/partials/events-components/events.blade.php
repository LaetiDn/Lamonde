
<section id="news-content">
    <div class="news-inner">
        @foreach($events as $event)
            <div class="all-news-ctn">
                <div class="news-ctn">
                    <div class="news-text">
                        <span class="date">{!! $event->date !!}</span>
                        <h2><a href="{{ the_permalink($event->ID) }}">{!! $event->post_title !!}</a></h2>
                        <div class="excerpt">
                            {{ get_excerpt($event->content) }}
                        </div>

                        @if( ICL_LANGUAGE_CODE == "fr")
                            <a href="{{ the_permalink($event->ID) }}" class="link">Lire la suite</a>
                        @else
                            <a href="{{ the_permalink($event->ID) }}" class="link">Read More</a>
                        @endif
                    </div>
                    <div class="thumbnail-ctn">
                        <figure class="img-ctn" style="background-image: url(' {{ $event->thumbnail['url'] }} ')">
                        </figure>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
