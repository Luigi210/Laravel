<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;

class CompactController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        $projects = Projects::all();
        
        return view('ourprojects', compact('news', 'projects'));
    }

    public function projects(){
        
        return view('ourprojects', [
            'projects' => $projects
        ]);
    }
}
