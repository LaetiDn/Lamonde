<section id="{{ get_sub_field('section_id') }}" class="block-instagram {{ get_sub_field('section_class') }} @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="hashtag-title">
        {!! get_sub_field("text")  !!}
    </div>
    <div class="instagram-outer">
        <?php echo do_shortcode( '[instagram-feed]' ) ; ?>
    </div>
</section>
