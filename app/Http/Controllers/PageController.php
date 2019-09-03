<?php

namespace App\Http\Controllers;
use App\Post;
use App\ServiceModel;
use Illuminate\Http\Request;
use Themosis\Support\Facades\Asset;
use Themosis\Support\Facades\Filter;
class PageController extends Controller
{

    public function index()
    {

        return view('pages.custom-page', $this->defaultContent, [

        ]);
    }
    public function custom_template()
    {
        $disable_header = false;

        if(get_page_template_slug( get_the_ID() ) === 'post-archive'){
            return view('pages.post-archive', $this->defaultContent, [
                'news' => Post::get_all_news(),
            ]);
        }else if(get_page_template_slug( get_the_ID() ) === 'contact'){
            return view('pages.contact', $this->defaultContent, [
            ]);
        }else if(get_page_template_slug( get_the_ID() ) === 'menu'){
            return view('pages.menu', $this->defaultContent, [
                'services' => ServiceModel::all(),
            ]);
        }else if(get_page_template_slug( get_the_ID() ) === ''){
            return view('pages.custom-page', $this->defaultContent);
        }else if( is_cart() ) {
            return view('shop.cart', $this->defaultContent, [
                'disable_hero' => true
            ]);
        }else if( is_checkout() ){
                return view('shop.cart', $this->defaultContent);
        }else if( is_account_page() ){
            return view('shop.cart', $this->defaultContent);
        }else if( is_checkout() ){
            return view('shop.cart', $this->defaultContent);
        }else{
            return "no route found";
        }

    }



    public function single_news()
    {
        Filter::add('comments_template', ['WC_Template_Loader', 'comments_template_loader']);
        return view('templates.single-news', $this->defaultContent, [
            'single_news' => Post::get_single_news(get_the_ID()),
        ]);
    }
    // public function shop()
    // {
    //     return view('shop.archive', $this->defaultContent, [
    //
    //     ]);
    // }
    //
    // public function product()
    // {
    //     Filter::add('comments_template', ['WC_Template_Loader', 'comments_template_loader']);
    //     return view('shop.product', $this->defaultContent, [
    //
    //     ]);
    // }
    //
    // public function cart()
    // {
    //
    //     return view('shop.cart', $this->defaultContent, [
    //
    //     ]);
    // }
    //
    //
    // public function page_404()
    // {
    //     return view('pages.page-404', $this->defaultContent);
    // }
}
