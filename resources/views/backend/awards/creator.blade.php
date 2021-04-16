@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.awards.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-12">
                            <div class="">
                               

                                <div class="form-group">
                                    <label>Award Description</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                </div>
                               

                            </div>
                        </div>

                 
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                        <button  class="btn btn-primary" type="submit">Add Award</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



@endsection
