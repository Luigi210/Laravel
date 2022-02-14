<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Icon;
use App\Models\Found;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $icons = Icon::orderBy('created_at', 'desc')->get();

        return view('admin.icon.index', [
            'icons' => $icons
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
        $founds = Found::orderBy('created_at', 'desc')->get();
        return view('admin.icon.create', [
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
        $icons = new Icon();
        $icons->icon = $request->icon;
        $icons->found_id = $request->found_id;
        
        $icons->save();
        return redirect()->back()->withSucces('Иконка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function show(Icon $icon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function edit(Icon $icon)
    {
        //
        $founds = Found::orderBy('created_at', 'desc')->get();

        return view('admin.icon.edit',
            [
                'icons' => $icon,
                'founds' => $founds
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icon $icon)
    {
        //
        $icon->icon = $request->icon;
        $icon->found_id = $request->found_id;

        $icon->save();
        return redirect()->back()->withSucces('Иконка изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        //
        $icon->delete();
        return redirect()->back()->withSucces('Иконка была удалена!');
        
    }
}
