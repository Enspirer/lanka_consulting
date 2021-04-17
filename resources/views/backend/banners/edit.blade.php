@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')



    <div class="card">
        <div class="card-header">
            <form action="{{route('admin.banners.update')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        @include('backend.file_manager.file_manager',['file_caption' => 'Image','file_input_name' => 'image','multiple' => false,'data' => $file_manager->file_name])
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$bannerDetails->title}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title NR</label>
                                    <input type="hidden" name="id" value="{{$bannerDetails->id}}">
                                    <input type="text" name="title_nr" class="form-control" value="{{$bannerDetails->title_nr}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Feature Image</label>
                                    <select class="form-control" name="featured">
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sort Order</label>
                                    <input type="number" value="0" min="0"  name="sort_order" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary pull-right">Save Changers</button>
            </form>
        </div>

    </div><!--card-->
@endsection

