@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <form action="{{route('admin.gallery.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                @include('backend.file_manager.file_manager',['file_caption' => 'Feature Image','file_input_name' => 'images','multiple' => false,'data' => null])
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" name="caption" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Picture Effect</label>
                                    <select class="form-control" name="picture_effect">
                                        <option value="normal">Normal</option>
                                        <option value="black_and_white">Black and White</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary pull-right">Add Image</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Image Name</th>
                                <th scope="col">Effect</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <script type="text/javascript">
        $(function () {

            var table = $('#villadatatable').DataTable({
                processing: false,
                ajax: "{{route('admin.gallery.json')}}",
                columns: [
                    {data: 'file', name: 'file'},
                    {data: 'image_name', name: 'image_name'},
                    {data: 'image_effect', name: 'image_effect'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>



@endsection
