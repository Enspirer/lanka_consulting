<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use App\Models\Gallery;
use App\Models\Projects;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = count(Projects::all());
        $files = count(FileManager::all());
        $banners = count(Gallery::all());

        return view('backend.dashboard',[
            'projects' => $projects,
            'files' => $files,
            'banners' => $banners
        ]);
    }
}
