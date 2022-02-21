<?php

namespace App\Http\Controllers\Admin;

use App\Models\Header;
use App\Models\ContactLinks;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = ContactLinks::orderBy('created_at', 'desc')-> get();


        return view('admin.contactLinks.index', 
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
        $header = Header::first();


        return view('admin.contactLinks.create',
            [
                'header' => $header
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

        $contact = new ContactLinks();

        $contact->image = $request->image;
        $contact->link = $request->link;
        $contact->description = $request->description;
        $contact->table_header_id = $request->table_header_id;

        $contact->save();


        return redirect()->back()->withSuccess('Ссылка Контакта добавлена');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactLinks  $contactLinks
     * @return \Illuminate\Http\Response
     */
    public function show(ContactLinks $contactLinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactLinks  $contactLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactLinks $contactLinks)
    {
        //

        $header = Header::first();

        return view('admin.contactLinks.edit', 
            [
                'header' => $header,
                'clink' => $contactLinks
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactLinks  $contactLinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactLinks $contactLinks)
    {
        //
        $contact->image = $request->image;
        $contact->link = $contact->link;
        $contact->description = $contact->description;
        $contact->table_header_id = $request->table_header_id;

        $contact->save();


        return redirect()->back()->withSuccess('Контакт ссылка изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactLinks  $contactLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactLinks $contactLinks)
    {
        //
        $contactLinks->delete();


        return redirect()->back()->withSuccess('Ссылка контакта удалена');
    }
}
