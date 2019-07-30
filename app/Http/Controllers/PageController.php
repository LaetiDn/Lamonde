<?php

namespace App\Http\Controllers;
use App\Post;
use App\PostModel;
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
        if(get_page_template_slug( get_the_ID() ) === ''){
            return view('pages.custom-page', $this->defaultContent);
        }else if(get_page_template_slug( get_the_ID() ) === 'post-archive'){
            return view('pages.post-archive', $this->defaultContent, [
                'news' => Post::get_all_news(),
            ]);
        }

    }

    public function single_news()
    {
        return view('templates.single-news', array_merge($this->getDefaultContent(), [
            'single_news' => PostModel::get_single_news(get_the_ID()),
        ]));
    }

    public function page_404()
    {
        return view('pages.page-404', $this->defaultContent);
    }
}
