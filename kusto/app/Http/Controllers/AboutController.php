<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutFound;
use App\Models\AboutFoundContent;
use App\Models\Member;
use App\Models\Employee;
use App\Models\SocialLinkIcon;
use App\Models\HeaderLinks;
use App\Models\LanguageLinks;
use App\Models\ContactLinks;
use App\Models\Header;



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
        $header = Header::first();
        $headerLinks = HeaderLinks::all();
        $languageLinks = LanguageLinks::all();
        $contactLinks = ContactLinks::all();
        return view('about', 
                    compact(
                            'about_found', 
                            'found_content', 
                            'member', 
                            'employees', 
                            'linkIcons',
                            'header',
                            'headerLinks',
                            'languageLinks',
                            'contactLinks'
                        )
                    );
    }

}
