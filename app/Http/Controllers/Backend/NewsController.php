<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use DataTables;
use App\Models\FileManager;

class NewsController extends Controller
{
    public function index()
    {
        $getDataDetals = News::all();
        return view('backend.news.index',[
            'get_data_details' => $getDataDetals
        ]);
    }

    public function create()
    {
        return view('backend.news.creator');
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            if(is_numeric($request->cover)) {
                $imageFiles = FileManager::where('id',$request->cover)->first();
                $featureimgs =  $imageFiles->url;

            }else{
                $featureimgs =  $request->cover;
            }
        }else{
            $featureimgs = $request->cover;
        }

        $fileManager = FileManager::where('id',$featureimgs)->first();
        $newsDetail = new News;
        $newsDetail->name = $request->name;
        $newsDetail->name_nr = $request->name_nr;
        $newsDetail->description = $request->description;
        $newsDetail->description_nr = $request->description_nr;
        $newsDetail->remarks = $request->remarks;
        $newsDetail->link = $request->link;
        $newsDetail->featured = $request->featured;
        $newsDetail->date = $request->date;
        $newsDetail->sort_order = $request->sort_order;
        $newsDetail->cover = $fileManager->url;
        $newsDetail->save();
        return back();
    }


    public function getData()
    {
        $category = News::select(['id', 'name', 'name_nr','remarks','link','description','description_nr','cover','featured','date','sort_order']);

        return Datatables::of($category)
            ->editColumn('cover',function ($row){
              return '<img style="height:100px" src="'.$row->cover.'">';
            })
            ->editColumn('status',function ($row){
                if ($row->status == 1)
                {
                    return 'Enabled';
                }else{
                    return 'Disabled';
                }
            })

            ->addColumn('action', function($row){
                $btn = '<a href="'.route('admin.news.edit',$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<button data-toggle="modal" data-target="#exampleModal'.$row->id.'" class="edit btn btn-danger btn-sm" style="margin-right: 10px"><i class="fa fa-trash"></i> Delete </button>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action','cover'])
            ->make();
    }

    public function edit($id)
    {
        $newsDetails = News::where('id',$id)->first();
        $fileManager = FileManager::where('url',$newsDetails->cover)->first();
        return view('backend.news.edit',[
            'news_details' => $newsDetails,
            'file_manager' => $fileManager
        ]);
    }

    public function delete($id)
    {
        News::where('id',$id)->delete();
        return back();
    }
}
