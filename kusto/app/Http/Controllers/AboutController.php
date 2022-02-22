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
use App\Models\Footer;
use App\Models\FooterAboutPartners;
use App\Models\FooterAboutPartnersDetails;
use App\Models\FooterContact;
use App\Models\FooterContactDetails;
use App\Models\FooterContactUs;
use App\Models\FooterSocialIcon;


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
        $footer = Footer::first();
        $footerAboutPartners = FooterAboutPartners::all();
        $footerAboutPartnersDetails = FooterAboutPartnersDetails::all();
        $footerContact = FooterContact::first();
        $footerContactDetails = FooterContactDetails::all();
        $footerContactUs = FooterContactUs::all();
        $footerSocial = FooterSocialIcon::all();
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
