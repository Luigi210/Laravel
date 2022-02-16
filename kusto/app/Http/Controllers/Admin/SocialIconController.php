<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLinkIcon;
use App\Models\Employee;
use Illuminate\Http\Request;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $icons = SocialLinkIcon::orderBy('created_at', 'desc')->get();

        return view('admin.about_icon.index',
            [
                'icons' => $icons
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
        $employees = Employee::orderBy('created_at', 'desc')->get();
        return view('admin.about_icon.create',
            [
                'employees' => $employees
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
        $icons = new SocialLinkIcon();
        $icons->icon = $request->icon;
        $icons->employee_id = $request->employee_id;

        $icons->save();

        return redirect()->back()->withSuccess('Иконка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialLinkIcon  $socialLinkIcon
     * @return \Illuminate\Http\Response
     */
    public function show(SocialLinkIcon $socialLinkIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialLinkIcon  $socialLinkIcon
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialLinkIcon $socialLinkIcon)
    {
        //
        $employees = Employee::orderBy('created_at', 'desc')->get();

        return view('admin.about_icon.edit',
            [
                'icons' => $socialLinkIcon,
                'employees' => $employees
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialLinkIcon  $socialLinkIcon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialLinkIcon $socialLinkIcon)
    {
        //
        $socialLinkIcon->icon = $request->icon;
        $socialLinkIcon->employee_id = $request->employee_id;

        $socialLinkIcon->save();

        return redirect()->back()->withSuccess('Иконка изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialLinkIcon  $socialLinkIcon
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLinkIcon $socialLinkIcon)
    {
        //
        $socialLinkIcon->delete();

        return redirect()->back()->withSuccess('Иконка удалена!');
    }
}
