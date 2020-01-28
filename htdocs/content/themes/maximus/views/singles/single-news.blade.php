@extends('master')

@section('main')
    <div class="hero page">
        <div class="bg-img" style="background-image: url('{{ $single_news->thumbnail["url"] }}')"></div>
    </div>

    <article id="single-news">

        <div class="content">
        <span class="date">{!! get_field('news_date', get_the_ID()) !!}</span>
        <h2>{!! $single_news->post_title !!}</h2>

        {!! get_field('news_content', get_the_ID()) !!}

        @if( ICL_LANGUAGE_CODE == "fr")
            <a href="{{ '/nouvelles' }}" class="link">Retour à la liste</a>
        @else
            <a href="{{ '/news' }}" class="link">Back to the list</a>
        @endif
        </div>

    </article>
@endsection
