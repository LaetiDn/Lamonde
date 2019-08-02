<div class="sticky-newsletter">
    <div class="wrapper">
        <div class="title-ctn">
            <button id="open-newsletter" class="bold">{!! pll__("_newsletter")  !!}</button>
        </div>
        <div class="newsletter-ctn">
            <?php
            $form = get_field("footer_newsletter_".$lang, "option");
            echo do_shortcode( ''.$form.'' );
            ?>
        </div>
    </div>

</div>
