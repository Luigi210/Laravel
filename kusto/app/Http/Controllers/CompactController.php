<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;
use App\Models\Found;
use App\Models\Icon;


class CompactController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        $projects = Projects::all();
        $founds = Found::all();
        $icons = Icon::all();
        return view('main', compact('news', 'projects', 'founds', 'icons'));
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
