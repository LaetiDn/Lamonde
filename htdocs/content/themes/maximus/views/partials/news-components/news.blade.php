
<section id="news-content">
    <div class="news-inner">
        @foreach($news as $single_news)
            <div class="all-news-ctn">
                <div class="news-ctn">
                    <div class="news-text">
                        <span class="date">{!! $single_news->date !!}</span>
                        <h2><a href="{{ the_permalink($single_news->ID) }}">{!! $single_news->post_title !!}</a></h2>
                        <div class="excerpt">
                            {{ get_excerpt($single_news->content) }}
                        </div>

                        @if( ICL_LANGUAGE_CODE == "fr")
                            <a href="{{ the_permalink($single_news->ID) }}" class="link">Lire la suite</a>
                        @else
                            <a href="{{ the_permalink($single_news->ID) }}" class="link">Read More</a>
                        @endif
                    </div>
                    <div class="thumbnail-ctn">
                        <figure class="img-ctn" style="background-image: url(' {{ $single_news->thumbnail['url'] }} ')">
                            <!-- <img src="{{ $single_news->thumbnail['url'] }}" alt="{{ $single_news->thumbnail['alt'] }}"> -->
                        </figure>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
