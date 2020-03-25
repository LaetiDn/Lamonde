@extends('master')

@section('main')

        @if( have_rows('blocks') )
            @while ( have_rows('blocks') )
                @php( the_row() )
                @if( get_row_layout() == 'block_discover' )
                    @include ("blocks.discover")
                @elseif( get_row_layout() == 'block_background' )
                    @include ("blocks.background")
                @elseif( get_row_layout() == 'block_image_text' )
                    @include ("blocks.image-text")
                @elseif( get_row_layout() == 'block_icons_text' )
                    @include ("blocks.icons-text")
                @elseif( get_row_layout() == 'block_open_form' )
                    @include ("blocks.open-form")
                @elseif( get_row_layout() == 'block_instagram' )
                    @include ("blocks.instagram-feed")
                @elseif( get_row_layout() == 'block_iframe' )
                    @include ("blocks.iframe")
                @elseif( get_row_layout() == 'block_dropdown' )
                    @include ("blocks.dropdown")
                @elseif( get_row_layout() == 'block_counter' )
                    @include ("blocks.counter")
                @endif

            @endwhile
        @endif

        {{-- Exemple de block portfolio --}}
        @include ("blocks.portfolio")

        {{-- Exemple de block testimonial --}}
        @include ("blocks.testimonial")

@endsection
