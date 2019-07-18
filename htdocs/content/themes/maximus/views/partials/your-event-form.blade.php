<div class="form-main-ctn lightBox">
    <a class="close-lightbox" href="#"></a>
    <div class="form-ctn">
        <div class="close">
            <a class="btn-close-form" href="#">
                <img src="{{ themosis_assets() }}/images/close.svg" alt="close window">
            </a>
        </div>

        <?php
            $form = get_field("form_shortcode");
            echo do_shortcode( ''.$form.'' );
        ?>
    </div>
</div>