<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfoModel extends Model
{
    public static function contact(){

        $strip = array(" ", "(", ")","-", ".");

        $contact = [
            'phone01' => get_field('cw_contact_phone01','option'),
            'phone02' => get_field('cw_contact_phone02','option'),

            'phone01_href' => str_replace($strip, "", get_field('cw_contact_phone01','option') ),
            'phone02_href' => str_replace($strip, "", get_field('cw_contact_phone02','option') ),

            'email' => get_field('cw_contact_email','option'),
            'fax' => get_field('cw_contact_fax','option'),

            'adress_fr' => get_field('cw_contact_adress_fr','option'),
            'adress_en' => get_field('cw_contact_adress_en','option'),

            'town_fr' => get_field('cw_contact_town_fr','option'),
            'town_en' => get_field('cw_contact_town_en','option'),

            'province' => get_field('cw_contact_province','option'),

            'postal_code' => get_field('cw_contact_postal_code','option'),

            'opening_list_fr' => get_field('cw_contact_opening_list_fr','option'),
            'opening_list_en' => get_field('cw_contact_opening_list_en','option'),

            'google_map' => get_field('cw_contact_google_map','option'),

        ];

        return $contact;
    }


    public static function social(){

        $social = [
            'facebook' => get_field('cw_social_facebook','option'),
            'twitter' => get_field('cw_social_twitter','option'),
            'instagram' => get_field('cw_social_instagram','option'),
            'trip_advisor' => get_field('cw_social_trip_advisor','option'),
            'youtube' => get_field('cw_social_youtube','option'),
        ];

        return $social;
    }

}
