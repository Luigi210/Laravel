<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;


class WelcomeController extends Controller
{
    //

    public function index()
    {
        $news = News::all();
        return view('foundnews', [
            'news' => $news
        ]);
    }

    public function projects(){
        $projects = Projects::all();
        
        return view('ourprojects', [
            'projects' => $projects
        ]);
    }
}
