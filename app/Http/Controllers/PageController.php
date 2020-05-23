<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display profile page
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('pages.profile');
    }
}