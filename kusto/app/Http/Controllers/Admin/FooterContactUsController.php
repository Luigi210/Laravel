<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterContactUs;
use App\Models\Footer;

use Illuminate\Http\Request;

class FooterContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.footer_contact_us.index', 
            [
                'contacts' => FooterContactUs::orderBy('created_at', 'desc')->get()
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

        return view('admin.footer_contact_us.create',
            [
                'footer' => Footer::first()
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

        $contact = new FooterContactUs();

        $contact->title = $request->title;
        $contact->image = $request->image;
        $contact->link = $request->link;
        $contact->footer_id = $request->footer_id;


        $contact->save();

        return redirect()->back()->withSuccess('Добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterContactUs  $footerContactUs
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContactUs $footerContactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterContactUs  $footerContactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterContactUs $footerContactUs)
    {
        //
        $footer = Footer::first();
        return view('admin.footer_contact_us.edit', 
            [
                'footer' => $footer,
                'footerContactUs' => $footerContactUs
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterContactUs  $footerContactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterContactUs $footerContactUs)
    {
        //
        $footerContactUs->title = $request->title;
        $footerContactUs->image = $request->image;
        $footerContactUs->link = $request->link;
        $footerContactUs->footer_id = $request->footer_id;


        $footerContactUs->save();

        return redirect()->back()->withSuccess('Добавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterContactUs  $footerContactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContactUs $footerContactUs)
    {
        //
        $footerContactUs->delete();

        return redirect()->back()->withSuccess('Удален');
    }
}
