<?php

namespace App\Http\Controllers\Admin;

use App\Models\Found;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $founds = Found::orderBy('created_at', 'desc')->get();

        return view('admin.found.index', [
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
        return view('admin.found.create');
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
        $founds = new Found();
        $founds->title = $request->title;
        $founds->description = $request->description;

        
        $founds->save();
        return redirect()->back()->withSucces('Фонд добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function show(Found $found)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function edit(Found $found)
    {
        //
        return view('admin.found.edit', [
            'founds' => $found
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Found $found)
    {
        //
        $found->title = $request->title;
        $found->description = $request->description;

        $found->save();
        return redirect()->back()->withSucces('Фонд изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function destroy(Found $found)
    {
        //
        $found->delete();
        return redirect()->back()->withSucces('Фонд был удален!');

    }
}
