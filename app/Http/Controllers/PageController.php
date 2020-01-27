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
            return view('archives.news', $this->defaultContent, [
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
        }else{
            return "no route found";
        }

    }
    public function single_news()
    {
        return view('singles.single-news', $this->defaultContent, [
            'single_news' => Post::get_single_news(get_the_ID()),
        ]);
    }

    public function page_404()
    {
        return view('pages.page-404', $this->defaultContent);
    }
}
