<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeaderLinks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hlinks = HeaderLinks::orderBy('created_at', 'desc')->get();

        return view('admin.headerLinks', 
            [
                'hlinks' => $hlinks
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
        $headers = Header::first();

        return view('admin.header.create', 
            [
                'headers' => $headers
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
        $header = new HeaderLinks();
        $header->table_header_id = $request->table_header_id;


        $header->save();

        return redirect()->back()->withSuccess('Ссылка хедера добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderLinks  $headerLinks
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderLinks $headerLinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderLinks  $headerLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(HeaderLinks $headerLinks)
    {
        //
        $header = Header::first();

        return view('admin.headerLinks.edit', 
            [
                'header' => $header,
                'hlinks' => $headerLinks
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderLinks  $headerLinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeaderLinks $headerLinks)
    {
        //
        $headerLinks->table_header_id = $request->table_header_id;

        $headerLinks->save();

        return redirect()->back()->withSuccess('Хедер ссылка изменена');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderLinks  $headerLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderLinks $headerLinks)
    {
        //
        $headerLinks->delete();

        return redirect()->back()->withSuccess('Ссылка хедера удалена');
    }
}
