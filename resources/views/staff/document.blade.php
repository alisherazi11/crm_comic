@extends('staff.layouts.master')
@section('title')
    Document CRM
@endsection
@section('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <body>


        <div id="header"></div>
        <!-- //headerSide -->
        <sidebar-element></sidebar-element>
        <!-- //blue side bat -->

        <sidebar2-element></sidebar2-element>

        <div class="app-content ">
            <div class="content-wrapper">
                <div class="content-body">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row spacingfourside">
                                <div class="col-md-12">
                                    <div class="card   round-box">
                                        <div class="card-content collpase show">
                                            <div class="top-bar">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="">
                                                            <h3 class="text-bold mt-1">Documents</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8"></div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mt-3 tablescrol">
                                                            <table class=" customeTable ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Delete</th>
                                                                        <th>Upload</th>
                                                                        <th>Filename</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if ($documents->count() > 0)
                                                                        @foreach ($documents as $item)
                                                                            <tr>
                                                                                <td>
                                                                                    <ion-icon name="document-outline"
                                                                                        data-toggle="modal"
                                                                                        class="update_doc"
                                                                                        data-id="{{ $item->id }}"
                                                                                        data-target="#exampleModalqw">

                                                                                    </ion-icon>
                                                                                    <ion-icon name="trash-outline"
                                                                                        data-toggle="modal"
                                                                                        class="delete_doc"
                                                                                        data-id="{{ $item->id }}"
                                                                                        data-target="#exampleModalCenterdel">
                                                                                    </ion-icon>
                                                                                </td>
                                                                                <td>
                                                                                    <label for="file">
                                                                                        <ion-icon class="upload"
                                                                                            data-toggle="modal"
                                                                                            data-target="#exampleModaladd"
                                                                                            name="cloud-upload-outline">
                                                                                        </ion-icon>

                                                                                    </label>
                                                                                </td>

                                                                                <td>
                                                                                    <a data-toggle="modal"
                                                                                        data-id="{{ $item->id }}"
                                                                                        class="preview"
                                                                                        data-target="#exampleModalCenterprev"
                                                                                        href="">{{ $item->filename }}</a>
                                                                                </td>
                                                                                <td>{{ $item->description }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @else
                                                                        <tr>
                                                                            <td>
                                                                                <ion-icon name="document-outline">

                                                                                </ion-icon>
                                                                                <ion-icon name="trash-outline">
                                                                                </ion-icon>
                                                                            </td>
                                                                            <td>
                                                                                <label for="file">
                                                                                    <ion-icon class="upload"
                                                                                        data-toggle="modal"
                                                                                        data-target="#exampleModaladd"
                                                                                        name="cloud-upload-outline">
                                                                                    </ion-icon>

                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                filename
                                                                            </td>
                                                                            <td>Description</td>
                                                                        </tr>
                                                                    @endif




                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal edit -->
        <div class="modal fade" id="exampleModalqw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="">
                            <h5 class="modal-title justify-content-center" id="exampleModalLabel">
                                Edit
                            </h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mx-auto">
                                        <form action="{{ url('update-document') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" id="update_id">
                                            <div class="form-group row">
                                                <label style="margin-top: 5px !important" class="col-md-3 label-control"
                                                    for="timesheetinput3">Add description</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" name="description" id="timesheetinput3"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="mt-1">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        {{-- add document --}}
        <div class="modal fade" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="">
                            <h5 class="modal-title justify-content-center" id="exampleModalLabel">
                                Add New Document
                            </h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mx-auto">
                                        <form action="{{ url('/documents') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label style="margin-top: 5px !important" class="col-md-3 label-control"
                                                    for="timesheetinput3">Add description</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="text" name="description" id="timesheetinput3"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label style="margin-top: 5px !important" class="col-md-3 label-control"
                                                    for="timesheetinput3">Upload File</label>
                                                <div class="col-md-9">
                                                    <div class="position-relative">
                                                        <input type="file" name="filename" id="timesheetinput3"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="mt-1">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button class="btn btn-primary" type="submit">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        {{-- preview --}}
        <div class="modal fade" id="exampleModalCenterprev" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title text-bold" id="exampleModalLongTitle">
                            Preview
                        </p>

                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <img src="" width="400px" class="show_image img-fluid" alt="" />

                        <div class="modalbtnContainer">
                            <button class="addbtn" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete --}}
        <div class="modal fade" id="exampleModalCenterdel" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header py-3 px-3">
                        <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>

                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h5>Are you sure to delete this?</h5>

                        <div class="modalbtnContainer">
                            <button class="btn btn bg-transparent" data-dismiss="modal">
                                Cancel
                            </button>
                            <form action="{{ url('delete-document') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="delete_id">
                                @method('DELETE')
                                <button class="addbtn" type="submit">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $('.delete_doc').click(function() {

            var id = $(this).data('id');
            $('#delete_id').val(id);
        });
        $('.update_doc').click(function() {

            var id = $(this).data('id');
            $('#update_id').val(id);
        });
        $('.preview').click(function() {

            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '/show-document',
                data: {
                    id
                },
                success: function(result) {
                    console.log(result.filename);
                    $('.show_image').attr('src', '/images/document/' + result.filename);
                }

            })
        });
    </script>
@endsection
