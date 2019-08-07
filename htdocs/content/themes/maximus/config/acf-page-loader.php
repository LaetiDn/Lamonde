<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5d0bc93d73d31',
        'title' => 'Page loader',
        'fields' => array(

            array(
                'key' => 'field_5d496ba40e2bc',
                'label' => 'Animations',
                'name' => 'pl_animations',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '75',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'false' => 'Inactive',
                    'default' => 'Default',
                    'split' => 'Split',
                ),
                'default_value' => array(
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5d4abe2734208',
                'label' => 'Preview : Default Animation',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5d496ba40e2bc',
                            'operator' => '==',
                            'value' => 'default',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => 'preview-animation',
                    'id' => '',
                ),
                'message' => '<button class="play" data-time="5000">Play</button>
<div class="loader default css-animation-step2" style="background-color: grey;" >

		<div class="logo-wrapper css-animation-step1 ">
		        
				<div class="logo"></div>
				<div class="txt-ctn">
						<h1 class="slogan" style="color:blue">Slogan</h1>
						<p class="subtitle" style="color:blue">Subtitle</p>
				</div>
		</div>
</div>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'field_5d0bc943d6daa',
                'label' => 'Background : color',
                'name' => 'pl_background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5d0bc986d6dab',
                'label' => 'Background : image',
                'name' => 'pl_background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5d0bc99ad6dac',
                'label' => 'Logo',
                'name' => 'pl_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5d0bc9aad6dad',
                'label' => 'Titre',
                'name' => 'pl_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5d0bc9bdd6dae',
                'label' => 'Subtitle',
                'name' => 'pl_subtitle',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'page-loader',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;