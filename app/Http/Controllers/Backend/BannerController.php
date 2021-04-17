<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\FileManager;
use Illuminate\Http\Request;
use DataTables;

class BannerController extends Controller
{
    public function index()
    {
        $getDataDetals = Banner::all();

        return view('backend.banners.index',[
            'get_data_details' => $getDataDetals
        ]);

    }

    public function create()
    {


        return view('backend.banners.index');
    }

    public function update(Request $request)
    {
        if($request->image)
        {
            if(is_numeric($request->image)) {
                $imageFiles = FileManager::where('id',$request->image)->first();
                $featureimgs =  $imageFiles->url;

            }else{
                $featureimgs =  $request->image;
            }
        }else{
            $featureimgs = $request->image;
        }
        Banner::where('id',$request->id)->update([
           'image' => $featureimgs,
           'sort_order' => $request->sort_order,
           'title' => $request->title,
           'featured' => $request->featured
        ]);
        return back();
    }

    public function store(Request $request)
    {
        $fileManager = FileManager::where('id',$request->image)->first();
        $banners = new Banner;
        $banners->title = $request->title;
        $banners->title_nr = $request->title_nr;
        $banners->image = $fileManager->url;
        $banners->featured = $request->feature;
        $banners->sort_order = $request->sort_order;
        $banners->save();
        return back();
    }

    public function edit($id)
    {
        $bannerDetails = Banner::where('id',$id)->first();
        $fileManager = FileManager::where('url',$bannerDetails->image)->first();


        return view('backend.banners.edit',[
            'bannerDetails' => $bannerDetails,
            'file_manager' => $fileManager
        ]);
    }

    public function delete($id)
    {
        Banner::where('id',$id)->delete();
        return back();
    }

    public function getData()
    {
        $banners = Banner::all();

        return Datatables::of($banners)
            ->editColumn('image', function($row){
                return '<img src="'.$row->image.'" style="height: 100px;">';
            })

            ->addColumn('action', function($row){
                $btn1 = ' <a href="'.route('admin.banners.edit',$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<button data-toggle="modal" data-target="#exampleModal'.$row->id.'" class="edit btn btn-danger btn-sm" style="margin-right: 10px"><i class="fa fa-trash"></i> Delete </button>';
                return  $btn1.$btn2;
            })
            ->rawColumns(['action','image'])
            ->make();
    }
}
