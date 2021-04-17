@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="row">
    <div class="col">

        <div class="card">
            <div class="card-header">
                <strong>Project&nbsp;</strong>
                <a class="btn btn-primary pull-right" href="{{route('admin.project.create')}}" role="button">Add Project</a>

            </div>
            <!--card-header-->

            <div class="card-body">
                <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Location</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!--card-->
    </div>
    <!--col-->
</div>
<!--row-->


@foreach($get_data_details as $getDataDetails)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$getDataDetails->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete {{$getDataDetails->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure delete this item
                    ({{$getDataDetails->name}})
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('admin.project.delete',$getDataDetails->id)}}" type="button" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endforeach







<script type="text/javascript">
    $(function() {

        var table = $('#villadatatable').DataTable({
            processing: false,
            ajax: "{{route('admin.project.getDetails')}}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'location',
                    name: 'location'
                },
                {
                    data: 'cover',
                    name: 'cover'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>


@endsection