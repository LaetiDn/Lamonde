<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfoModel extends Model
{
    public static function contact(){

        $strip = array(" ", "(", ")","-", ".");

        $contact = [
            'phone01' => get_field('contact_phone01','option'),
            'phone02' => get_field('contact_phone02','option'),

            'phone01_href' => str_replace($strip, "", get_field('contact_phone01','option') ),
            'phone02_href' => str_replace($strip, "", get_field('contact_phone02','option') ),

            'email' => get_field('contact_email','option'),
            'fax' => get_field('contact_fax','option'),

            'adress_fr' => get_field('contact_adress_fr','option'),
            'adress_en' => get_field('contact_adress_en','option'),

            'city_fr' => get_field('contact_city_fr','option'),
            'city_en' => get_field('contact_city_en','option'),

            'province' => get_field('contact_province','option'),

            'postal_code' => get_field('contact_postal_code','option'),

            'opening_list_fr' => get_field('contact_opening_list_fr','option'),
            'opening_list_en' => get_field('contact_opening_list_en','option'),


        ];

        return $contact;
    }


    public static function social(){

        $social = [
            'facebook' => get_field('social_facebook','option'),
            'twitter' => get_field('social_twitter','option'),
            'instagram' => get_field('social_instagram','option'),
            'trip_advisor' => get_field('social_trip_advisor','option'),
            'youtube' => get_field('social_youtube','option'),
        ];

        return $social;
    }

}
