<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutFoundContent;
use App\Models\AboutFound;
use Illuminate\Http\Request;

class AboutFoundContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $content = AboutFoundContent::orderBy('created_at', 'desc')->get();

        return view('admin.about_found_content.index', [
            'contents' => $content
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
        $founds = AboutFound::orderBy('created_at', 'desc')->get();
        return view('admin.about_found_content.create', [
            'founds' => $founds
        ]);
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
        $content = new AboutFoundContent();
        $content->title = $request->title;
        $content->description = $request->description;
        $content->image = $request->image;
        $content->found_id = $request->found_id;

        $content->save();

        return redirect()->back()->withSucces('Контент добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutFoundContent  $aboutFoundContent
     * @return \Illuminate\Http\Response
     */
    public function show(AboutFoundContent $aboutFoundContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutFoundContent  $aboutFoundContent
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutFoundContent $aboutFoundContent)
    {
        //
        $founds = AboutFound::orderBy('created_at', 'desc')->get();

        return view('admin.about_found_content.edit',
            [
                'founds' => $founds,
                'contents' => $aboutFoundContent
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFoundContent  $aboutFoundContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFoundContent $aboutFoundContent)
    {
        //
        $aboutFoundContent = new AboutFoundContent();
        $aboutFoundContent->title = $request->title;
        $aboutFoundContent->description = $request->description;
        $aboutFoundContent->image = $request->image;
        $aboutFoundContent->found_id = $request->found_id;

        $aboutFoundContent->save();

        return redirect()->back()->withSucces('Контент добавлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFoundContent  $aboutFoundContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFoundContent $aboutFoundContent)
    {
        //
        $aboutFoundContent->delete();
        return redirect()->back()->withSucces('Иконка была удалена!');
    }
}
