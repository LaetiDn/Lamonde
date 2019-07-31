@extends('master')

@section('main')
    <section class="woo-page">
        <div class="content-ctn default-padding">


        @loop
        @include('shop.parts.content')
        @if(comments_open() || get_comments_number())
            @php(comments_template('/views/comments/template.php'))
        @endif
        @endloop
        </div>
    </section>
@endsection