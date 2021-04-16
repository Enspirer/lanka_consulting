@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.awards.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-12">
                        <div class="">

                            <input type="text" value="{{$awardsDetails->id}}" name="item_id" hidden>
                            <div class="form-group">
                                <label>Award Description</label>
                                <textarea class="form-control" rows="5" name="description">{{$awardsDetails->description}}</textarea>
                            </div>


                        </div>
                    </div>


                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Update Award</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


@endsection