<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use DataTables;

class BannerController extends Controller
{
    public function index()
    {
        return view('backend.banners.index');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $banners = new Banner;
        $banners->title = $request->title;
        $banners->title_nr = $request->title_nr;
        $banners->image = 1;
        $banners->featured = $request->feature;
        $banners->sort_order = $request->sort_order;
        $banners->save();
        return back();
    }

    public function edit($id)
    {
        return view('backend.banners.edit');
    }

    public function getData()
    {
        $banners = Banner::all();

        return Datatables::of($banners)
            ->editColumn('image', function($row){
                return '<img src="'.file_manager_get_url($row->image).'" style="height: 100px;">';
            })
            ->addColumn('action', function($row){
                $btn = '<a href="'.route('admin.banners.delete',$row->id).'" class="edit btn btn-danger btn-sm" style="margin-right: 10px"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn;
            })
            ->rawColumns(['action','image'])
            ->make();
    }
}
