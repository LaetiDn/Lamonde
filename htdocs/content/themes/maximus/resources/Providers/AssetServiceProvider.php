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

        
        //VENDORS JS
        Asset::add('vendor_js', 'js/vendors.min.js', [], $theme->getHeader('1.0'))->to('front');

        //APP JS
        Asset::add('theme_js', 'js/app.min.js', ['vendor_js'], $theme->getHeader('1.0'))->to('front');

        //CSS
        Asset::add('theme_styles', 'css/theme.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('slick_styles', 'css/slick.css', [], $theme->getHeader('version'))->to('front');

        Asset::add('lightbox_styles', 'css/lightbox.min.css', [], $theme->getHeader('version'))->to('front');

        Asset::add('slick-theme_styles', 'css/slick-theme.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('lity_styles', 'css/lity.min.css', [], $theme->getHeader('version'))->to('front');


    }


}
