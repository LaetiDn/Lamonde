<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function custom_template()
    {
        return view('pages.custom-page', $this->defaultContent);
    }
}
