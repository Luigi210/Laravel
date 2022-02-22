<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterAboutPartnersDetails;
use App\Models\FooterAboutPartners;
use Illuminate\Http\Request;

class FooterAboutPartnersDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $footerAboutPartnersDetails = FooterAboutPartnersDetails::orderBy('created_at', 'desc')->get();

        return view('admin.footer_about_partners_details.index',
            [
                'footerAboutPartnersDetails' => $footerAboutPartnersDetails
            ]
        );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $footerAboutPartners = FooterAboutPartners::all();


        return view('admin.footer_about_partners_details.create', 
            [
                'footerAboutPartners' => $footerAboutPartners
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $footerAboutPartnersDetails = new FooterAboutPartnersDetails();

        $footerAboutPartnersDetails->title = $request->title;
        $footerAboutPartnersDetails->link = $request->link;
        $footerAboutPartnersDetails->about_partners_id = $request->about_partners_id;

        $footerAboutPartnersDetails->save();

        return redirect()->back()->withSuccess('Добавлены детали');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterAboutPartnersDetails  $footerAboutPartnersDetails
     * @return \Illuminate\Http\Response
     */
    public function show(FooterAboutPartnersDetails $footerAboutPartnersDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterAboutPartnersDetails  $footerAboutPartnersDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterAboutPartnersDetails $footerAboutPartnersDetails)
    {
        //
        $footerAboutPartners = FooterAboutPartners::all();


        return view('admin.footer_about_partners_details.edit', 
            [
                'footerAboutPartners' => $footerAboutPartners,
                'footerAboutPartnersDetail' => $footerAboutPartnersDetails
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterAboutPartnersDetails  $footerAboutPartnersDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterAboutPartnersDetails $footerAboutPartnersDetails)
    {
        //
        $footerAboutPartners->title = $request->title;
        $footerAboutPartners->link = $request->link;
        $footerAboutPartners->about_partners_id = $request->about_partners_id;

        $footerAboutPartners->save();

        return redirect()->back()->withSuccess('Изменены детали');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterAboutPartnersDetails  $footerAboutPartnersDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterAboutPartnersDetails $footerAboutPartnersDetails)
    {
        //
        $footerAboutPartnersDetails->delete();

        return redirect()->back()->withSuccess('Удален!');
    }
}
