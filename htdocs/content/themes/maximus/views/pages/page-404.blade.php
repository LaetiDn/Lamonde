
@extends('master')

@section('main')


    <style>
        body {
            margin:auto;
        }
        .page-404-inner {
            position: relative;
            background-color: white;
            height:100vh;
            width:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;

        }

        .overlay {
            position: absolute;
            left:0;
            top:0;
            width:100%;
            height:100%;
            background-color: {{ get_field('404_overlay_color', 'option') }};
            opacity: {{ get_field('404_overlay_opacity', 'option') }};
            z-index:1;
        }

        .msg-container {
            text-align: center;
            position: relative;
            z-index:10;
            width:100%;
            padding:0 25px;
        }

        .title-ctn {
            margin:50px 0;
            width:100%;
        }

        .title-ctn h1 {
            margin-top:25px;
            color: {{ get_field('404_text_color', 'option') }}!important;
        }

        a {
            color:{{ get_field('404_backlink_color', 'option') }}!important;
        }

        img {
            max-width:100px;
        }

    </style>

    <div id="page-404">
        <div class="page-404-inner" style="background-image: url('{{ get_field('404_bgImg', 'option')['url'] }}')">
            <div class="overlay"></div>
            <div class="msg-container">
                <div class="logo-ctn">
                    @if( !empty(get_field('404_logo', 'option')['url']) )
                        <a href="{{ pll_home_url() }}"><img src="{{ get_field('404_logo', 'option')['url'] }}" alt="logo"></a>
                    @endif
                </div>

                <div class="title-ctn">
                    <h1 class="404-text">{!! get_field('404_text_'.$lang , 'option') !!}</h1>
                </div>
                <div class="back-link-ctn">
                    <a href="{{ pll_home_url() }}" class="404-backlink">{!! get_field('404_text_back_'.$lang , 'option') !!} </a>
                </div>
            </div>

        </div>
    </div>

@endsection






