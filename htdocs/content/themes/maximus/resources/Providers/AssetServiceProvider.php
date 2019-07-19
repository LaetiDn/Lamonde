<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Themosis\Core\ThemeManager;
use Themosis\Support\Facades\Asset;
use App\CompanyInfoModel;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register()
    {
        /** @var ThemeManager $theme */
        $theme = $this->app->make('wp.theme');

        //JS
        Asset::add('jquery_js', 'js/jquery.js', [], $theme->getHeader('3.4.1', false))->to('front');

        Asset::add('theme_js', 'js/theme.min.js', ['jquery_js'], $theme->getHeader('version'))->to('front');
        Asset::add('slick_js', 'js/slick.min.js', ['jquery_js'], $theme->getHeader('version'))->to('front');
        Asset::add('lity_js', 'js/lity.min.js', ['jquery_js'], $theme->getHeader('version'))->to('front');

        //CSS
        Asset::add('theme_styles', 'css/theme.css', [], $theme->getHeader('version'))->to('front');

        Asset::add('slick_styles', 'css/slick.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('slick-theme_styles', 'css/slick-theme.css', [], $theme->getHeader('version'))->to('front');

        Asset::add('lity_styles', 'css/lity.min.css', [], $theme->getHeader('version'))->to('front');

        Asset::add('theme_woo', 'css/woocommerce.css', ['theme_styles'], $theme->getHeader('version'))->to('front');
    }


}
