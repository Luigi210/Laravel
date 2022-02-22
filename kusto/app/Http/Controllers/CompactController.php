<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Projects;
use App\Models\Found;
use App\Models\Icon;
use App\Models\AboutFound;
use App\Models\AboutFoundContent;
use App\Models\Report;
use App\Models\Header;
use App\Models\HeaderLinks;
use App\Models\LanguageLinks;
use App\Models\ContactLinks;
use App\Models\Footer;
use App\Models\FooterAboutPartners;
use App\Models\FooterAboutPartnersDetails;
use App\Models\FooterContact;
use App\Models\FooterContactDetails;
use App\Models\FooterContactUs;
use App\Models\FooterSocialIcon;













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
        $reports = Report::all();
        $header = Header::first();
        $headerLinks = HeaderLinks::all();
        $languageLinks = LanguageLinks::all();
        $contactLinks = ContactLinks::all();
        $footer = Footer::first();
        $footerAboutPartners = FooterAboutPartners::all();
        $footerAboutPartnersDetails = FooterAboutPartnersDetails::all();
        $footerContact = FooterContact::first();
        $footerContactDetails = FooterContactDetails::all();
        $footerContactUs = FooterContactUs::all();
        $footerSocial = FooterSocialIcon::all();

        return view('main', 
                    compact(
                            'news', 
                            'projects', 
                            'founds', 
                            'icons', 
                            'about_found', 
                            'found_content', 
                            'reports',
                            'header',
                            'headerLinks',
                            'languageLinks',
                            'contactLinks',
                            'footer',
                            'footerAboutPartners',
                            'footerAboutPartnersDetails',
                            'footerContact',
                            'footerContactDetails',
                            'footerContactUs',
                            'footerSocial'
                        )
                    );
    }

}
