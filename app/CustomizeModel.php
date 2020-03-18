<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomizeModel extends Model
{
    public static function header(){


        $header = [
            'phone01' => get_field('contact_phone01','option'),
        ];

        return $header;
    }


    public static function footer(){

        $footer = [

        ];

        return $footer;
    }

    public static function typography(){

        $typo = [

        ];

        return $typo;
    }

    public static function element(){

        $element = [

        ];

        return $element;
    }

    public static function animation(){

        if(get_field('animation_props', 'option')['easing'] === 'custom'){
           $easing = get_field('animation_props', 'option')['easing_custom'];
        }else{
            $easing= get_field('animation_props', 'option')['easing'];
        }

        $animation = [
            'prop_duration' => get_field('animation_props', 'option')['duration'],
            'prop_delay' => get_field('animation_props', 'option')['delay'],
            'prop_easing' => $easing,
            'content_animation' => get_field('content_animation', 'option')['animation'],
        ];

        return $animation;
    }

}
