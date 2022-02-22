<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSocialIcon;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterSocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socialIcons = FooterSocialIcon::orderBy('created_at', 'desc')->get();

        return view('admin.footer_contact_social_icons.index',
            [
                'socialIcons' => $socialIcons
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

        $footer = Footer::first();

        return view('admin.footer_contact_social_icons.create', 
            [
                'footer' => $footer,
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
        $footerSocialIcon = new FooterSocialIcon();

        $footerSocialIcon->image = $request->image;
        $footerSocialIcon->link = $request->link;
        $footerSocialIcon->footer_id = $request->footer_id;

        $footerSocialIcon->save();

        return redirect()->back()->withSuccess('Иконки добавлены');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterSocialIcon  $footerSocialIcon
     * @return \Illuminate\Http\Response
     */
    public function show(FooterSocialIcon $footerSocialIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterSocialIcon  $footerSocialIcon
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterSocialIcon $footerSocialIcon)
    {
        //

        $footer = Footer::first();
        return view('admin.footer_contact_social_icons.edit',
            [
                'footerSocialIcon' => $footerSocialIcon,
                'footer' => $footer
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterSocialIcon  $footerSocialIcon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterSocialIcon $footerSocialIcon)
    {
        //
        $footerSocialIcon->image = $request->image;
        $footerSocialIcon->link = $request->link;
        $footerSocialIcon->footer_id = $request->footer_id;

        $footerSocialIcon->save();

        return redirect()->back()->withSuccess('Иконка обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterSocialIcon  $footerSocialIcon
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterSocialIcon $footerSocialIcon)
    {
        //

        $footerSocialIcon->delete();

        return redirect()->back()->withSuccess('Иконка удалена!');
    }
}
