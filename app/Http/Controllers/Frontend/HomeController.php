<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return redirect()->route('frontend.auth.login');
    }

    public function view_licnese($name)
    {
        return view('frontend.view_license');
    }
}
