@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="container"><br>
                    <h3>Projects</h3>
                    <h2>{{$projects}}</h2>
                </div>
            </div><!--card-->
        </div><!--col-->
        <div class="col-md-3">
            <div class="card">
                <div class="container"><br>
                    <h3>Gallery</h3>
                    <h2>{{$gallery}}</h2>
                </div>
            </div><!--card-->
        </div><!--col-->
        <div class="col-md-3">
            <div class="card">
                <div class="container"><br>
                    <h3>Uploaded Files</h3>
                    <h2>{{$files}}</h2>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
