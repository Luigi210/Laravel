<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPage;
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
        $footer = Footer::first();
        $footerAboutPartners = FooterAboutPartners::all();
        $footerAboutPartnersDetails = FooterAboutPartnersDetails::all();
        $footerContact = FooterContact::first();
        $footerContactDetails = FooterContactDetails::all();
        $footerContactUs = FooterContactUs::all();
        $footerSocial = FooterSocialIcon::all();
        return view('projects', [
            'project' => $project,
            'header' => $header,
            'headerLinks' => $headerLinks,
            'languageLinks' => $languageLinks,
            'contactLinks' => $contactLinks,
            'footer' => $footer,
            'footerAboutPartners' => $footerAboutPartners,
            'footerAboutPartnersDetails' => $footerAboutPartnersDetails,
            'footerContact' => $footerContact,
            'footerContactDetails' => $footerContactDetails,
            'footerContactUs' => $footerContactUs,
            'footerSocial' => $footerSocial
        ]);
    }

    
}
