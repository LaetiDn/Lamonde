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
                <svg id="Calque_1" style="width:25px; height:25px;" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.71 15.71">
                    <title>close</title>
                    <g id="Calque_2" data-name="Calque 2">
                        <g id="icon"><line x1="0.35" y1="15.35" x2="15.35" y2="0.35" style="fill:none;stroke:#ffffff;stroke-miterlimit:10"/><line x1="0.35" y1="0.35" x2="15.35" y2="15.35" style="fill:none;stroke:#ffffff;stroke-miterlimit:10"/></g>
                    </g>
                </svg>
            </a>
        </div>

        <?php
            $form = get_sub_field("form_shortcode");
            echo do_shortcode( ''.$form.'' );
        ?>
    </div>
</div>