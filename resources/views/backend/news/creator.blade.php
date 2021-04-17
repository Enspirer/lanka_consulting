@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.news.edit')}}" method="post" enctype="multipart/form-data">
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
                                                            <input type="text" name="name" class="form-control mb-1" value="">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea type="text" name="description" class="form-control mb-1" rows="20"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-change-password">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name_nr" class="form-control mb-1" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea type="text" name="description_nr" class="form-control mb-1" rows="20"></textarea>
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
                                    <label class="form-label">Remarks</label>
                                    <input type="text" name="remarks" class="form-control mb-1" value="" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control mb-1" value="" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Feature</label>
                                    <input type="text" name="featured" class="form-control mb-1" value="" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control mb-1" value="" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Sort Order</label>
                                    <input type="number" name="sort_order" class="form-control mb-1" value="0" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Cover Photo</label>

                                    @include('backend.file_manager.file_manager',['file_caption' => 'Feature Image','file_input_name' => 'cover','multiple' => false,'data' => null])
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <button  class="btn btn-primary" type="submit">Add News</button>
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

