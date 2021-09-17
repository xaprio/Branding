<?php

namespace App\Http\Controllers\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OfferController extends Controller
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
        return view('offer.offer');
    }

    public function show(Request $request)
    {
        return view('offer.add');
    }

    public function edit(Request $request)
    {
        return view('offer.edit');
    }



}
