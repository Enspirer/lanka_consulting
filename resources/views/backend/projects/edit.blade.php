@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.project.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-9">
                            <div class="">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="hidden" value="{{$projectDetails->id}}" name="item_id">
                                    <input type="text" class="form-control" value="{{$projectDetails->project_name}}" name="project_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Location</label>
                                    <input type="text" class="form-control" name="location" required value="{{$projectDetails->location}}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="11" name="description">{{$projectDetails->description}}</textarea>
                                </div>
                                @include('backend.file_manager.file_manager',['file_caption' => 'Project Images','file_input_name' => 'images','multiple' => true, 'data' => json_decode($projectDetails->images)])

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-12">
                                @include('backend.file_manager.file_manager',['file_caption' => 'Feature Image','file_input_name' => 'feature_image','multiple' => false,'data' => $projectDetails->feature_images])


                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <button  class="btn btn-primary" type="submit">Edit Project</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">

        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        });

        $('#uploadFile').click(function(){
            myDropzone.processQueue();
        });

    </script>

@endsection
