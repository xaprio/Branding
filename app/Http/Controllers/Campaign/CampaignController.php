<?php

namespace App\Http\Controllers\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CampaignController extends Controller
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
        return view('campaign.campaign');
    }

    public function show(Request $request)
    {
        return view('campaign.add');
    }

    public function edit(Request $request)
    {
        return view('campaign.edit');
    }



}
