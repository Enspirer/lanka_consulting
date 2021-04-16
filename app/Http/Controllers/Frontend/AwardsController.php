<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
        /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $awardsDetails = Awards::get();
        return view('frontend.awards',[
            'awardsDetails' => $awardsDetails
        ]);
        // return view('frontend.awards');
    }
}
