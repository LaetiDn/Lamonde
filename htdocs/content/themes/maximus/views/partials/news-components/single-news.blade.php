{{-- @if(is_product())

    @include('shop.product')
@else --}}
    <div class="hero page">
        <div class="bg-img" style="background-image: url('{{ $single_news->thumbnail["url"] }}')"></div>
    </div>

    <section id="single-news">
        <div class="single-news-inner">
            <div class="news-content">
                <div class="news-text">
                    <span class="date">{!! get_field('news_date', get_the_ID()) !!}</span>
                    <h2>{!! $single_news->post_title !!}</h2>
                    <div class="content">
                        {!! get_field('news_content', get_the_ID()) !!}
                    </div>

                    @if( ICL_LANGUAGE_CODE == "fr")
                        <a href="{{ '/nouvelles' }}" class="link">Retour à la liste</a>
                    @else
                        <a href="{{ '/news' }}" class="link">Back to the list</a>
                    @endif
                </div>
            </div>

        </div>
    </section>
{{-- @endif --}}
