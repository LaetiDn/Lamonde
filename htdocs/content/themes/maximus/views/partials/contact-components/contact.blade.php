<section id="contact-content">
    <div class="content-ctn">
        <div class="form-wrapper">
            <div class="form-title">
                <h2>{{ get_field("contact_title", get_the_ID()) }}</h2>
                <div class="wysiwyg-ctn">
                    {!! get_field("contact_wysiwyg", get_the_ID()) !!}
                </div>

            </div>
            <div class="form-ctn">
                <?php
                $form = get_field("contact_form_shortcode");
                echo do_shortcode( ''.$form.'' );
                ?>
            </div>
        </div>

    </div>
</section>
