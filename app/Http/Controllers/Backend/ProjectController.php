<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
class ProjectController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }


    public function store(Request $request)
    {
        $fileManager = FileManager::where('id',$request->cover_image)->first();
        $project = new Projects;
        $project->cover = $fileManager->url;
        $project->sort_order = $request->sort_order;
        $project->year = $request->year;
        $project->name = $request->name;
        $project->type = $request->type;
        $project->location = $request->location;
        $project->worth = $request->worth;
        $project->scope = $request->scope;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->name_nr = $request->name_nr;
        $project->location_nr = $request->location_nr;
        $project->type_nr = $request->type_nr;
        $project->worth_nr = $request->worth_nr;
        $project->In_numbers = $request->In_numbers;
        $project->client = $request->client;
        $project->In_numbers_nr = $request->In_numbers_nr;
        $project->scope_nr = $request->scope_nr;
        $project->description_nr = $request->description_nr;
        $project->status_nr = $request->status_nr;
        $project->save();
        return redirect()->route('admin.projects.index');
    }

    public function delete($id)
    {
        Projects::where('id',$id)->delete();
        return back();
    }

    public function getDetails()
    {
        $category = Projects::select(['id', 'name', 'client','location','cover','created_at']);
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
        $projedtDetails = Projects::where('id',$id)->first();
        $fileManager = FileManager::where('url',$projedtDetails->cover)->first();
        return view('backend.projects.edit',[
            'projectDetails' => $projedtDetails,
            'ocver_image' => $fileManager
        ]);
    }

    public function update(Request $request)
    {
        if($request->cover_image)
        {
            if(is_numeric($request->cover_image)) {
                $imageFiles = FileManager::where('id',$request->cover_image)->first();
                $featureimgs =  $imageFiles->file_name;
            }else{
                $featureimgs =  $request->cover_image;
            }

        }else{
            $featureimgs = $request->cover_image;
        }
        $getFiles = FileManager::where('file_name',$featureimgs)->first();
        Projects::where('id',$request->id)->update([
           'cover' => $getFiles->url,
           'sort_order' =>  $request->sort_order,
           'year' =>  $request->year,
           'name' =>  $request->name,
           'type' =>  $request->type,
           'location' =>  $request->location,
           'worth' =>  $request->worth,
           'scope' =>  $request->scope,
           'description' =>  $request->description,
           'status' =>  $request->status,
           'name_nr' =>  $request->name_nr,
           'location_nr' =>  $request->location_nr,
           'type_nr' =>  $request->type_nr,
           'worth_nr' =>  $request->worth_nr,
           'In_numbers' =>  $request->In_numbers,
           'scope_nr' =>  $request->scope_nr,
           'description_nr' =>  $request->description_nr,
           'status_nr' =>  $request->status_nr,
        ]);
        return back();
    }

    public function create()
    {
        return view('backend.projects.creator');
    }
}
