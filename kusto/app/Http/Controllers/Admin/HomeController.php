<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;



class HomeController extends Controller
{
    //

    public function index(){

        $news_count = News::all()->count();
        $projects_count = Projects::all()->count(); 

        return view('admin.home.index', [
            'news_count' => $news_count,
            'projects_count' => $projects_count
        ]);
    }
}
