@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.project.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="light-style flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card overflow-hidden">
                                    <div class="row no-gutters row-bordered row-border-light">
                                        <div class="col-md-3 pt-0">
                                            <div class="list-group list-group-flush account-settings-links">
                                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">English</a>
                                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Norwegian</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="account-general">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="hidden" name="id" class="form-control mb-1" value="{{$projectDetails->id}}" required>

                                                            <input type="text" name="name" class="form-control mb-1" value="{{$projectDetails->name}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Location</label>
                                                            <input type="text" name="location" class="form-control" value="{{$projectDetails->location}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Type</label>
                                                            <input type="text" name="type" class="form-control" value="{{$projectDetails->type}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Worth</label>
                                                            <input type="text" name="worth" class="form-control" value="{{$projectDetails->worth}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">In Numbers</label>
                                                            <input type="text" name="In_numbers" class="form-control" value="{{$projectDetails->In_numbers}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Scope</label>
                                                            <input type="text" name="scope" class="form-control" value="{{$projectDetails->scope}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea type="text" name="description" rows="10" class="form-control">{{$projectDetails->description}}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                <option value="1" {{ $projectDetails->status == 1 ? "selected" : "" }} >Enabled</option>
                                                                <option value="0" {{ $projectDetails->status == 0 ? "selected" : "" }} >Disabled</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-change-password">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name_nr" class="form-control mb-1" value="{{$projectDetails->name_nr}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Location</label>
                                                            <input type="text" name="location_nr" class="form-control" value="{{$projectDetails->location_nr}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Type</label>
                                                            <input type="text" name="type_nr" class="form-control" value="{{$projectDetails->type_nr}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Worth</label>
                                                            <input type="text" name="worth_nr" class="form-control" value="{{$projectDetails->worth_nr}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">In Numbers</label>
                                                            <input type="text" name="In_numbers_nr" class="form-control" value="{{$projectDetails->In_numbers_nr}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Scope</label>
                                                            <input type="text" name="scope_nr" class="form-control" value="{{$projectDetails->scope_nr}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea type="text" name="description_nr" rows="10" class="form-control">{{$projectDetails->description_nr}}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Status</label>
                                                            <select name="status_nr" class="form-control">
                                                                <option value="1" {{ $projectDetails->status_nr == 1 ? "selected" : "" }} >Enabled</option>
                                                                <option value="0" {{ $projectDetails->status_nr == 0 ? "selected" : "" }}>Disabled</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sort Order</label>
                                    <input type="number" min="0" name="sort_order" class="form-control mb-1" value="{{$projectDetails->sort_order}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Year</label>
                                    <input type="number" name="year" class="form-control mb-1" value="{{$projectDetails->year}}"  required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Client</label>
                                    <input type="text" name="client" class="form-control mb-1" value="{{$projectDetails->client}}"  required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Cover Photo</label>
                                    @include('backend.file_manager.file_manager',['file_caption' => 'Feature Image','file_input_name' => 'cover_image','multiple' => false,'data' =>   $ocver_image->file_name])
                                </div>
                            </div>
                        </div>



                        <div class="text-right mt-3">
                            <button  class="btn btn-primary" type="submit">Save Changers</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                    <br><br>
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
