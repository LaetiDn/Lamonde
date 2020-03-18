<section class="block-instagram @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="hashtag-title">
        {!! get_sub_field("text")  !!}
    </div>
    <div class="instagram-outer">
        <?php echo do_shortcode( '[instagram-feed]' ) ; ?>
    </div>
</section>

