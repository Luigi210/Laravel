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
        $news_count = NewsPage::all()->count();
        return view('news', 
            [
                'newspage' => $news
            ]
        );
    }

    public function asd(){
        
        $count = ProjectsPage::all()->count();
        return view('projects', 
            [
                'cnt' => $count
            ]
        );
    }
}
    // public function index(){
    //     return view('news');
    // }
// }
