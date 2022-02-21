<?php

namespace App\Http\Controllers\Admin;

use App\Models\LanguageLinks;
use App\Models\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $languageLinks = LanguageLinks::all();

        return view('admin.languageLinks.index', [
            'links' => $languageLinks
        ]);
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

        return view('admin.languageLinks.create', 
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
        $links = new LanguageLinks();

        $links->name = $request->name;
        $links->link = $request->link;
        $links->table_header_id = $request->table_header_id;

        $links->save();

        return redirect()->back()->withSuccess('Ссылка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LanguageLinks  $languageLinks
     * @return \Illuminate\Http\Response
     */
    public function show(LanguageLinks $languageLinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LanguageLinks  $languageLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(LanguageLinks $languageLinks)
    {
        //
        $header = Header::first();

        return view('admin.languageLinks.create', 
            [
                'header' => $header,
                'links' => $languageLinks
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LanguageLinks  $languageLinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LanguageLinks $languageLinks)
    {
        //
        $links->name = $request->name;
        $links->link = $request->link;
        $links->table_header_id = $request->table_header_id;
        
        $employee->save();

        return redirect()->back()->withSuccess('Ссылка изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LanguageLinks  $languageLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(LanguageLinks $languageLinks)
    {
        //
        $languageLinks->delete();

        return redirect()->back()->withSuccess('Ссылка удалена');

    }
}
