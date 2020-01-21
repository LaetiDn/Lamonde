
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
                        <a href="{{ the_permalink($single_news->ID) }}" class="link">{!! pll__('_read-more') !!}</a>

                    </div>
                    <div class="thumbnail-ctn">
                        <div class="img-ctn" style="background-image: url(' {{ $single_news->thumbnail['url'] }} ')"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
