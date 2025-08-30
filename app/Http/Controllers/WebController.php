<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about_us()
    {
        return view('about_us');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function about_us_storyline()
    {
        return view('about_us_storyline');
    }

    /**
     * Display the specified resource.
     */
    public function about_us_philosophy()
    {
        return view('about_us_philosophy');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function about_us_imprint()
    {
        return view('about_imprint');
    }

    /**
     * Update the specified resource in storage.
     */
    public function our_team()
    {
        return view('about_us_our_team');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function responsibility()
    {
        return view('about_us_responsibility');
    }
    public function contact_us()
    {
        return view('contact');
    }

    public function cleaning_handover()
    {
        return view('cleaning_handover');
    }

    public function cleaning_page()
    {
        return view('cleaning_page');
    }
     public function all_services()
    {
        return view('services');
    }
    public function booking()
    {
        return view('booking');
    }

}
