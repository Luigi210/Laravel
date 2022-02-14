<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutFound;
use Illuminate\Http\Request;

class AboutFoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $founds = AboutFound::orderBy('created_at', 'desc')->get();

        return view('admin.about_found.index', [
            'founds' => $founds
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
        return view('admin.about_found.create');
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
        $founds = new AboutFound();
        $founds->title = $request->title;
        $founds->description = $request->description;
        $founds->image = $request->image;
        
        $founds->save();
        return redirect()->back()->withSucces('Фонд добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutFound  $aboutFound
     * @return \Illuminate\Http\Response
     */
    public function show(AboutFound $aboutFound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutFound  $aboutFound
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutFound $aboutFound)
    {
        //
        return view('admin.about_found.edit', [
            'founds' => $aboutFound
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFound  $aboutFound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFound $aboutFound)
    {
        //
        $aboutFound->title = $request->title;
        $aboutFound->description = $request->description;
        $aboutFound->image = $request->image;
        
        $aboutFound->save();
        return redirect()->back()->withSucces('Фонд добавлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFound  $aboutFound
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFound $aboutFound)
    {
        //
        $aboutFound->delete();
        return redirect()->back()->withSucces('Фонд был удален!');
    }
}
