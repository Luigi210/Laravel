<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;
use App\Models\Found;
use App\Models\Icon;
use App\Models\AboutFound;
use App\Models\AboutFoundContent;



class CompactController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        $projects = Projects::all();
        $founds = Found::all();
        $icons = Icon::all();
        $about_found = AboutFound::first();
        $found_content = AboutFoundContent::all();
        return view('main', compact('news', 'projects', 'founds', 'icons', 'about_found', 'found_content'));
    }

    // public function projects(){
        
    //     return view('ourprojects', [
    //         'projects' => $projects
    //     ]);
    // }

    // public function found(){

    //     $founds = Found::all();
    //     return view('found', [
    //         'founds' => $founds
    //     ]);

    // }
}
