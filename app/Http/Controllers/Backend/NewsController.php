<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use DataTables;

class NewsController extends Controller
{
    public function index()
    {
        return view('backend.news.index');
    }


    public function getData()
    {
        $category = News::select(['id', 'name', 'client','location','cover','created_at']);

        return Datatables::of($category)
            ->editColumn('status',function ($row){
                if ($row->status == 1)
                {
                    return 'Enabled';
                }else{
                    return 'Disabled';
                }
            })

            ->addColumn('action', function($row){
                $btn = '<a href="'.route('admin.projects.edit',$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="'.route('admin.project.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}
