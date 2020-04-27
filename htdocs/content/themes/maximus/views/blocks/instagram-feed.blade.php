<section id="{{ str_slug(get_sub_field('section_id')) }}" class="block-instagram {{ get_sub_field('section_class') }} @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="hashtag-title" style="text-align:center;">
        <h2>
            @if(!empty($social['instagram']))
            <a href="{{ $social['instagram'] }}" class="$social-link" target="_blank">{!! get_sub_field("hashtag") !!}</a>
            @else
                {!! get_sub_field("hashtag") !!}
            @endif
        </h2>
    </div>
    <div class="instagram-outer">
        <?php echo do_shortcode( '[instagram-feed]' ) ; ?>
    </div>
</section>
