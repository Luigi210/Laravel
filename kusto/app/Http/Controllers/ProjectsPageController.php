<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPage;
use Illuminate\Support\Facades\DB;


class ProjectsPageController extends Controller
{
    
    public function index()
    {
        // $project = DB::select('select * from projectspage where id = 1');
        $project = ProjectsPage::all();
        // dd($project);
        return view('projects', [
            'project' => $project
        ]);
    }

    // public function index(){
    //     return view('news');
    // }
}
