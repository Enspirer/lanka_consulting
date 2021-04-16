<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\FileManager;
class FileManagerController extends Controller
{
    public function index()
    {
        return view('backend.file_manager.index');
    }

    public function getData()
    {
        $files = Filemanager::all();
        return Datatables::of($files)
            ->addColumn('file', function($row){
                return '<img src="'.$row->url.'" style="height: 40px;">';
            })

            ->addColumn('action', function($row){
                $btn1 = '<a  target="_blank"  href="'.$row->url.'" class="edit btn btn-primary btn-sm"><i class="fa fa-edit"></i> View</a>';
                $btn2 = '<button href="#" onclick="delete_item('.$row->id.',\''.$row->file_name.'\',\''.$row->url.'\')" class="edit btn btn-danger btn-sm" style="margin-left: 5px;"><i class="fa fa-trash"></i></button>';
                return $btn1.$btn2;
            })
            ->rawColumns(['action','file'])
            ->make();
    }

    public function getDialogData($name)
    {
        $files = Filemanager::all();
        return Datatables::of($files)
            ->addColumn('file', function($row){
                return '<img src="'.$row->url.'" style="height: 40px;">';
            })

            ->addColumn('action', function($row) use ($name){
                $btn1 = '<a href="#"  onclick="select_item'.$name.'('.$row->id.',\''.$row->url.'\')" class="edit btn btn-primary btn-sm"><i class="fa fa-check-circle"></i></a>';
                return $btn1;
            })
            ->rawColumns(['action','file'])
            ->make();
    }

    public function create()
    {

    }

    public function store()
    {

        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        $fullURLs = request()->file->move(public_path('files'), $imageName);
        $fileManager = new Filemanager;
        $fileManager->file_name = $imageName;
        $fileManager->user_id = auth()->user()->id;
        $fileManager->alt_tag = $imageName;
        $fileManager->url = url('/files/').'/'.$imageName;
        $fileManager->extension = request()->file->getClientOriginalExtension();
        $fileManager->save();
    }


    public function delete($id)
    {
        FileManager::where('id',$id)->delete();
        return back();
    }
}
