<section class="block-open-form section-content" style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content-ctn">
        <div class="wysywyg-ctn">
            {!! get_sub_field("wysywyg") !!}
        </div>
        <div class="link-ctn">
            <a class="cta open-form" href="#">{{ get_sub_field("link_text") }}</a>
            @if(!empty( get_sub_field("link")))
                <a class="cta" href="{{ get_sub_field("link")["url"] }}">{{ get_sub_field("link")["title"] }}</a>
            @endif
        </div>
    </div>
</section>

<div class="form-main-ctn lightBox">
    <a class="close-lightbox" href="#"></a>
    <div class="form-ctn">
        <div class="close">
            <a class="btn-close-form" href="#">
                <img src="{{ themosis_assets() }}/images/close.svg" alt="close window">
            </a>
        </div>

        <?php
            $form = get_sub_field("form_shortcode");
            echo do_shortcode( ''.$form.'' );
        ?>
    </div>
</div>