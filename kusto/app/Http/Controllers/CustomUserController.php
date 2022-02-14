<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CustomUserRequest;

class CustomUserController extends Controller
{
    //
    public function submit(CustomUserRequest $request)
    {

        $name = $request->name;
        $phone = $request->phone;
        return DB::table('custom_users')->insert([
            'name' => $name,
            'phone' => $phone
        ]);
    }

    public function index(){

        return view('request');
    }
}
