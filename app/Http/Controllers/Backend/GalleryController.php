<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use App\Models\Gallery;
use Illuminate\Http\Request;
use DataTables;

class GalleryController extends Controller
{
    public function index()
    {
        return view('backend.gallery.index');
    }


    public function getData()
    {
        $files = Gallery::all();

        return Datatables::of($files)
            ->addColumn('file', function($row){
                return '<img src="'.file_manager_get_url($row->image_id).'" style="height: 100px;">';
            })
            ->addColumn('action', function($row){
                $btn = '<a href="'.route('admin.gallery.delete',$row->id).'" class="edit btn btn-danger btn-sm" style="margin-right: 10px"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn;
            })
            ->rawColumns(['action','file'])
            ->make();
    }

    public function store(Request $request)
    {
        $fileManager = FileManager::where('id',$request->images)->first();
        $gallayr = new Gallery;
        $gallayr->image_id = $request->images;
        $gallayr->image_name = $fileManager->file_name;
        $gallayr->image_effect = $request->picture_effect;
        $gallayr->title = $request->caption;
        $gallayr->save();
        return back();
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {
        Gallery::where('id',$id)->delete();
        return back();
    }
}
