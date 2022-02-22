<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterContact;
use App\Models\Footer;

use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = FooterContact::orderBy('created_at', 'desc')->get();

        return view('admin.footer_contact.index',
            [
                'contacts' => $contacts
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
        
        return view('admin.footer_contact.create',
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
        $contact = new FooterContact();

        $contact->title = $request->title;
        $contact->footer_id = $request->footer_id;

        $contact->save();

        return redirect()->back()->withSuccess('Создано');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContact $footerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterContact $footerContact)
    {
        //

        $footer = Footer::first();


        return view('admin.footer_contact.edit',
            [
                'footer' => $footer,
                'contact' => $footerContact
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterContact $footerContact)
    {
        //
        
        $footerContact->title = $request->title;
        $footerContact->footer_id = $request->footer_id;

        $footerContact->save();

        return redirect()->back()->withSuccess('изменено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContact $footerContact)
    {
        //

        $footerContact->delete();

        return redirect()->back()->withSuccess('Удалено');
    }
}
