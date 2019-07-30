<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Themosis\Support\Facades\Asset;
class PageController extends Controller
{

    public function index()
    {

        return view('pages.custom-page', $this->defaultContent, [

        ]);
    }
    public function custom_template()
    {
        if(get_page_template_slug( get_the_ID() ) === 'post-archive'){
            return view('pages.post-archive', $this->defaultContent, [
                'news' => Post::get_all_news(),
            ]);
        }else if(get_page_template_slug( get_the_ID() ) === 'contact'){
            return view('pages.contact', $this->defaultContent, [
            ]);
        }else{
            return view('pages.custom-page', $this->defaultContent);
        }

    }



    public function single_news()
    {
        return view('templates.single-news', $this->defaultContent, [
            'single_news' => Post::get_single_news(get_the_ID()),
        ]);
    }

    public function page_404()
    {
        return view('pages.page-404', $this->defaultContent);
    }
}
