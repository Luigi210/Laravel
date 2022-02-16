<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutFound;
use App\Models\AboutFoundContent;
use App\Models\Member;
use App\Models\Employee;
use App\Models\SocialLinkIcon;

use Illuminate\Support\Facades\DB;




class AboutController extends Controller
{
    //
    public function index()
    {
        $about_found = AboutFound::orderBy('created_at', 'asc')->where('id', 2)->first();
        $found_content = AboutFoundContent::all();
        $member = Member::all();
        $employees = Employee::all();
        $linkIcons = SocialLinkIcon::all();
        return view('about', compact('about_found', 'found_content', 'member', 'employees', 'linkIcons'));
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
