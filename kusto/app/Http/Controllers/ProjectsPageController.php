<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPage;
use App\Models\Header;
use App\Models\HeaderLinks;
use App\Models\LanguageLinks;
use App\Models\ContactLinks;

use Illuminate\Support\Facades\DB;


class ProjectsPageController extends Controller
{
    
    public function index()
    {
        // $project = DB::select('select * from projectspage where id = 1');
        $project = ProjectsPage::all();
        $header = Header::first();

        $headerLinks = HeaderLinks::all();
        $languageLinks = LanguageLinks::all();
        $contactLinks = ContactLinks::all();
        return view('projects', [
            'project' => $project,
            'header' => $header,
            'headerLinks' => $headerLinks,
            'languageLinks' => $languageLinks,
            'contactLinks' => $contactLinks
        ]);
    }

    
}
