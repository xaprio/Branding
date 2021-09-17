<?php

namespace App\Http\Controllers\Advertiser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdvertiserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('advertiser.advertiser');
    }

    public function show(Request $request)
    {
        return view('advertiser.add');
    }

    public function edit(Request $request)
    {
        return view('advertiser.edit');
    }



}
