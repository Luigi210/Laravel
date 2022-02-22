<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterContactDetails;
use App\Models\FooterContact;
use Illuminate\Http\Request;

class FooterContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.footer_contact_details.index',
            [
                'details' => FooterContactDetails::orderBy('created_at', 'desc')->get()
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
        $contacts = FooterContact::first();
        return view('admin.footer_contact_details.create',
        
            [
                'contacts' => $contacts
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

        $contact = new FootercontactDetails();

        $contact->title = $request->title;
        $contact->image = $request->image;
        $contact->details = $request->details;
        $contact->contact_id = $request->contact_id;

        $contact->save();


        return redirect()->back()->withSuccess('Добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterContactDetails  $footerContactDetails
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContactDetails $footerContactDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterContactDetails  $footerContactDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterContactDetails $footerContactDetails)
    {
        //

        return view('admin.footer_contact_details.edit', 
        
            [
                'details' => $footerContactDetails,
                'contact' => FooterContact::first()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterContactDetails  $footerContactDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterContactDetails $footerContactDetails)
    {
        //
        $footerContactDetails->title = $request->title;
        $footerContactDetails->image = $request->image;
        $footerContactDetails->details = $request->details;
        $footerContactDetails->contact_id = $request->contact_id;

        $footerContactDetails->save();


        return redirect()->back()->withSuccess('Обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterContactDetails  $footerContactDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContactDetails $footerContactDetails)
    {
        //

        $footerContactDetails->delete();


        return redirect()->back()->withSuccess('Удален');
    }
}
