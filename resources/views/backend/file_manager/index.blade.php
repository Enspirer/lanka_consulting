@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card" style="">
                <div class="card-header">
                    <form action="{{route('admin.file_manager.store')}}" name="file" class="dropzone" id="myAwesomeDropzone">
                        {{csrf_field()}}
                    </form>

                </div><!--card-header-->
                <div class="card-body">
                    <table class="table table-hover" id="villadatatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">File</th>
                            <th scope="col">File Name</th>
                            <th scope="col">File Path</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: 600px;max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 18px;font-weight: 400;">Are you sure delete this item</p>
                            <div class="card">
                                <div class="row"><br>
                                    <div class="col-md-4">
                                        <img id="my_image" style="height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="container" style="padding-top: 20px;padding-bottom: 10px;">

                                            <b>
                                                <div id="item_cart_title_delete"> </div>
                                            </b>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Phasellus porttitor cursus velit, ut imperdiet libero blandit a.
                                                Donec vitae tristique libero, ut laoreet justo.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="" type="button" class="btn btn-danger" id="delete_ids">Delete Image</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">



        function load_tables() {
            var table = $('#villadatatable').DataTable({
                processing: true,
                "language": {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw" style="color: greenyellow"></i>'},
                responsive: true,
                ajax: "{{route('admin.file_manager.json')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'file', name: 'file',orderable: false, searchable: false},
                    {data: 'file_name', name: 'file_name'},
                    {data: 'url', name: 'url'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        }
        $(function () {
            load_tables()
        });
        function delete_item(id,item_name,url) {
            $("#item_name_title").text(item_name);
            $("#item_cart_title_delete").text(item_name);
            $('#my_image').attr('src',url);
            $('#delete_ids').attr('href',"{{url('admin/file_manager/delete')}}/"+id );
            $('#myModal').modal('show')
        }

        var varmet = 12 / 17;
        var metFile;
        var donObj;
        var dropz;
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 8, // MB
            init: function () {
                this.on('success', function( file, resp ){
                    $('#villadatatable').DataTable().ajax.reload();
                });
            },
            transformFile: function(file, done,aepsetrat) {
                metFile = file;
                donObj = done;
                dropz = this;
                // Create Dropzone reference for use in confirm button click handler
                genearateEditor(file,done,this);
            }
        };




        function genearateEditor(file, done, myDropZone) {
            // Create the image editor overlay
            var editor = document.createElement('div');
            editor.id = 'enp_editor';
            editor.style.position = 'fixed';
            editor.style.left = 0;
            editor.style.right = 0;
            editor.style.top = 0;
            editor.style.bottom = 0;
            editor.style.zIndex = 9999;
            editor.style.backgroundColor = '#000';
            document.body.appendChild(editor);

            var description_pane = document.createElement('div');
            description_pane.style.position = 'fixed';
            description_pane.className = 'aside-menu';
            description_pane.style.width = '540px';
            description_pane.style.backgroundColor = 'black';
            editor.appendChild(description_pane);

            var editor_title = document.createElement('div');
            editor_title.innerHTML = '' +
                '<div class="" style="color: white;padding: 10px;margin-top:10px;font-size: 20px;">' +
                '<div>Enspirer CRM</div>' +
                '</div>' +
                '<div class="container">' +
                '<label class="btn btn-primary">' +
                    '<input type="radio"  class="sr-only" onclick="change_ratios(7 / 5)" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">' +
                    '<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">Project Image Ratio</span>' +
                '</label>'+ '<br>' +

                '<label class="btn btn-primary">' +
                    '<input type="radio"  class="sr-only" onclick="change_ratios(5 / 3)" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">' +
                    '<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">Slider Image Ratio</span>' +
                '</label>'+ '<br>' +

                '<label class="btn btn-primary">' +
                    '<input type="radio"  class="sr-only" onclick="change_ratios()" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">' +
                    '<span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">Free Ratio</span>' +
                '</label>'+

                '</div>';


            editor_title.className = 'aside-menu';
            editor_title.style.width = '540px';
            editor_title.style.backgroundColor = 'black';
            description_pane.appendChild(editor_title);

            // Create confirm button at the top left of the viewport
            var buttonConfirm = document.createElement('button');
            buttonConfirm.style.position = 'absolute';
            buttonConfirm.style.left = '10px';
            buttonConfirm.style.top = '10px';
            buttonConfirm.className = 'btn btn-primary';
            buttonConfirm.style.zIndex = 9999;
            buttonConfirm.textContent = 'Confirm';
            editor.appendChild(buttonConfirm);
            buttonConfirm.addEventListener('click', function() {
                // Get the canvas with image data from Cropper.js

                var canvas = cropper.getCroppedCanvas();
                // Turn the canvas into a Blob (file object without a name)
                canvas.toBlob(function(blob) {
                    // Create a new Dropzone file thumbnail
                    myDropZone.createThumbnail(
                        blob,
                        myDropZone.options.thumbnailWidth,
                        myDropZone.options.thumbnailHeight,
                        myDropZone.options.thumbnailMethod,
                        false,
                        function(dataURL) {

                            // Update the Dropzone file thumbnail
                            myDropZone.emit('thumbnail', file, dataURL);
                            // Return the file to Dropzone
                            done(blob);
                        });
                });
                // Remove the editor from the view
                document.body.removeChild(editor);
            });
            // Create an image node for Cropper.js
            var image = new Image();
            image.src = URL.createObjectURL(file);
            editor.appendChild(image);

            // Create Cropper.js


                var cropper = new Cropper(image, {
                    aspectRatio: varmet,
                });

        }

        function change_ratios(ratio) {
            var editorr = document.getElementById("enp_editor");

            document.body.removeChild(editorr);
            varmet = ratio;
            genearateEditor(metFile,donObj,dropz);
        }
    </script>
@endsection
