<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Themosis\Core\Forms\FormHelper;
use Themosis\Core\Validation\ValidatesRequests;
use App\CompanyInfoModel;

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
            }
            else {
                $lang = '';
            }

            $this->defaultContent = [
                'contact' => CompanyInfoModel::contact(),
                'social' => CompanyInfoModel::social(),
                'lang' => $lang,
                'strip' => array(" ", "(", ")","-", "."),
            ];
        }else{
            die('acf doit être activé');
        }
    }
}
