<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomUser;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = CustomUser::orderBy('created_at', 'desc')->get();
        return view('admin.custom_user.index',
            [
                'custom_users' => $news
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomUser  $customUser
     * @return \Illuminate\Http\Response
     */
    public function show(CustomUser $customUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomUser  $customUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomUser $customUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomUser  $customUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomUser $customUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomUser  $customUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomUser $customUser)
    {
        //
        $customUser->delete();
        return redirect()->back()->withSucces('Пользователь был удален');
    }
}
