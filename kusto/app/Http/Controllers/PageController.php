<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPage;
use App\Models\NewsPage;
use App\Models\Header;
use App\Models\HeaderLinks;
use App\Models\LanguageLinks;
use App\Models\ContactLinks;



class PageController extends Controller
{
    //
    public function index()
    {
        $news = NewsPage::first();
        $header = Header::first();

        $headerLinks = HeaderLinks::all();
        $languageLinks = LanguageLinks::all();
        $contactLinks = ContactLinks::all();
        return view('news', 
            [
                'newspage' => $news,
                'header' => $header,
                'headerLinks' => $headerLinks,
                'languageLinks' => $languageLinks,
                'contactLinks' => $contactLinks,
            ]
        );
    }
}
