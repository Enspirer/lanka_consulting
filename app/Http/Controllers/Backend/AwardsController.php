<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Awards;

class AwardsController extends Controller
{
    public function index()
    {
        return view('backend.awards.index');
    }
    public function create()
    {
        return view('backend.awards.creator');
    }
    public function store(Request $request)
    {
        $awards = new Awards;
        $awards->description = $request->description;
        $awards->save();
        return redirect()->route('admin.awards.index');
    }

    public function getDetails()
    {
        $category = Awards::select(['id', 'description', 'created_at']);

        return Datatables::of($category)
            ->editColumn('description', function ($row) {
                return substr($row->description,0,35).'...';
            })
            ->editColumn('status', function ($row) {
                if ($row->status == 1) {
                    return 'Enabled';
                } else {
                    return 'Disabled';
                }
            })

            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('admin.awards.edit', $row->id) . '" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="' . route('admin.awards.delete', $row->id) . '" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn . $btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function delete($id)
    {
        Awards::where('id', $id)->delete();
        return back();
    }

    public function edit($id)
    {
        $awardsDetails = Awards::where('id',$id)->first();

        return view('backend.awards.edit',[
            'awardsDetails' => $awardsDetails
        ]);
    }
    public function update(Request $request)
    {
        Awards::where('id',$request->item_id)->update([
           'description' => $request->description,
        ]);
        return redirect()->route('admin.awards.index');
    }

}
