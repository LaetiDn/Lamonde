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

        if(get_field('animation_all', 'option')['effect'] === 'custom'){
           $effect = get_field('animation_all', 'option')['effect_custom'];
        }else{
            $effect = get_field('animation_all', 'option')['effect'];
        }

        $animation = [
            'gen_duration' => get_field('animation_all', 'option')['duration'],
            'gen_delay' => get_field('animation_all', 'option')['delay'],
            'gen_effect' => $effect,
            'content_animation' => get_field('content_animation', 'option')['animation'],
        ];

        return $animation;
    }

}
