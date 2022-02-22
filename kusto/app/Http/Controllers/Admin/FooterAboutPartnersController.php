<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterAboutPartners;
use App\Models\Footer;

use Illuminate\Http\Request;

class FooterAboutPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $footersAboutPartners = FooterAboutPartners::orderBy('created_at', 'desc')->get();

        return view('admin.footer_about_partners.index',
            [
                'footersAboutPartners' => $footersAboutPartners
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
        $footer = Footer::first();

        return view('admin.footer_about_partners.create', 
            [
                'footer' => $footer
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
        $footerAboutPartners = new FooterAboutPartners();

        $footerAboutPartners->title = $request->title;
        $footerAboutPartners->footer_id = $request->footer_id;

        $footerAboutPartners->save();

        return redirect()->back()->withSuccess('Добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterAboutPartners  $footerAboutPartners
     * @return \Illuminate\Http\Response
     */
    public function show(FooterAboutPartners $footerAboutPartners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterAboutPartners  $footerAboutPartners
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterAboutPartners $footerAboutPartners)
    {
        //

        $footer = Footer::first();
        return view('admin.footer_about_partners.edit',
            [
                'footerAboutPartners' => $footerAboutPartners,
                'footer' => $footer
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterAboutPartners  $footerAboutPartners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterAboutPartners $footerAboutPartners)
    {
        //
        $footerAboutPartners->title = $request->title;
        $footerAboutPartners->footer_id = $request->footer_id;

        $footerAboutPartners->save();

        return redirect()->back()->withSuccess('Изменена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterAboutPartners  $footerAboutPartners
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterAboutPartners $footerAboutPartners)
    {
        //
        $footerAboutPartners->delete();
        return redirect()->back()->withSuccess('Удален!');

    }
}
