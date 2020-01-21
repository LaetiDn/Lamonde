<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Themosis\Core\Forms\FormHelper;
use Themosis\Core\Validation\ValidatesRequests;
use App\CompanyInfoModel;
use App\CustomizeModel;

class Controller extends BaseController
{
    use FormHelper, ValidatesRequests;

    public $defaultContent;

    public function __construct()
    {
        if( function_exists('acf_add_options_page') ) {
            //Si polylang est activer, set la variable $lang
            if( function_exists('pll_current_language') ) {
                $lang = pll_current_language();
                $default_lang = pll_default_language();
            }else {
                $lang = '';
            }

            if($default_lang == 'en'){
                ($lang == 'en' ? $home_url = '/' : $home_url = '/fr/accueil');
            }else{
                ($lang == 'fr' ? $home_url = '/' : $home_url = '/en/home' );
            }

            $this->defaultContent = [
                'contact' => CompanyInfoModel::contact(),
                'social' => CompanyInfoModel::social(),
                'animation' => CustomizeModel::animation(),
                'lang' => $lang,
                'home_url' => $home_url,
                'strip' => array(" ", "(", ")","-", "."),
            ];
        }else{
            die('acf doit être activé');
        }
    }
}
