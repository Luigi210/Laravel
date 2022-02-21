<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPage;
use App\Models\NewsPage;


class PageController extends Controller
{
    //
    public function index()
    {
        $news = NewsPage::first();
        return view('news', 
            [
                'newspage' => $news
            ]
        );
    }
}
