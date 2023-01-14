<!DOCTYPE html>
<html lang="en">
<head>
        <x-projecthead />
        @section('title')
            My Project
        @endsection
</head>
<body>
    <x-projectnavbar />
{{-- @extends('admin.layouts.user') --}}

{{-- @section('content') --}}
    <div class="tableContainer pt-5" style="width:60%; margin-left:20%;  margin-left:20%;  margin-top:-20px; height: fit-content;">
        <div class="d-flex justify-content-between mb-4">
            <h3 id="Active" class="text-bold">Active Project</h3>
        </div>

        <nav>
            <div class="nav nav-tabs projectTabs" id="nav-tab" role="tablist">
                <!-- <button class="addbtn rightbtn">Save</button> -->

                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true" onclick="active1()" style="color: #000;">Active</a>
                <a class="nav-item nav-link Projecttabs" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                    role="tab" onclick="active2()" aria-controls="nav-profile" aria-selected="false">All Project</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="actimeproject">
                    <div class="my-2 mb-3 d-flex  justify-content-end">
                        <button class="addbtn" data-toggle="modal" data-target="#exampleModalCentercreate">
                            Add Project
                        </button>
                    </div>
                    <div class="tableWrapper projectTable" style="height: fit-content !important;">
                        <table id="example" class="display" style="width: 100%">
                            <thead>
                                <tr class="tabelHeader">
                                    <th></th>
                                    <th>Copy</th>
                                    <th>Setting</th>
                                    <th>Project Name (Click to open)</th>
                                    <th>Contact</th>
                                    <th>Edit Dialling info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $item)
                                    <tr>
                                        <td>
                                            <div data-toggle="modal" data-id="{{ $item->id }}"
                                                data-target="#exampleModalCenterdel" class="projectCircle delete_project">
                                                <ion-icon class="closeicon" name="close-circle-outline"></ion-icon>
                                            </div>
                                        </td>

                                        <td>
                                            <div data-toggle="modal" data-id="{{ $item->title }}"
                                                data-target="#exampleModalCentercopy" class="projectCircle copy_project">
                                                <ion-icon class="closeicon" name="copy-outline"></ion-icon>

                                            </div>
                                        </td>
                                        <td>
                                            <div data-toggle="modal"
                                                data-id="{{ $item->id }}"data-target="#exampleModalCenter5"
                                                class="projectCircle setting">
                                                <img src="{{ asset('images/settings.png') }}" class="settingimg"
                                                    alt="" />
                                            </div>
                                        </td>
{{--                                        <td><a id="ProjectName" href="{{url('dashboard/'.$item->id)}}">{{ $item->title }}</a></td>--}}
                                        <td><a id="ProjectName" href="{{url('filter-contacts/'.$item->id)}}">{{ $item->title }}</a></td>
                                        <td>{{ getallcontact($item->id)}}</td>
                                        <td>
                                            <p>{{ $item->type }}</p>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="actimeproject">
                    <div class="my-2 mb-3 d-flex justify-content-end">

                        <button class="addbtn" data-toggle="modal" data-target="#exampleModalCentercreate">
                            Add Project
                        </button>
                    </div>
                    <div class="tableWrapper projectTable">
                        <table id="example" class="display" style="width: 100%">
                            <thead>
                                <tr class="tabelHeader">
                                    <th></th>
                                    <th>Copy</th>
                                    <th>Setting</th>
                                    <th>Project Name (Click to open)</th>
                                    <th>Contact</th>
                                    <th>Edit Dialling info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $item)
                                    <tr>
                                        <td>
                                            <div data-toggle="modal" data-target="#exampleModalCenterdel"
                                                class="projectCircle">
                                                <ion-icon class="closeicon" name="close-circle-outline"></ion-icon>

                                            </div>
                                        </td>

                                        <td>
                                            <div data-toggle="modal" data-id="{{ $item->title }}"
                                                data-target="#exampleModalCentercopy" class="projectCircle copy_project">
                                                <ion-icon class="closeicon" name="copy-outline"></ion-icon>

                                            </div>
                                        </td>
                                        <td>
                                            <div data-toggle="modal"
                                                data-id="{{ $item->id }}"data-target="#exampleModalCenter5"
                                                class="projectCircle setting">
                                                <img src="{{ asset('images/settings.png') }}" class="settingimg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ getallcontact($item->id)}}</td>
                                        <td>
                                            <p>{{ $item->type }}</p>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///Setting -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="/update-project" method="post">
                <input type="hidden" name="update_id" id="update_id">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header py-3 px-3">
                        <p class="text-bold modal-title" id="exampleModalLongTitle">
                            Project Setting
                        </p>

                        <div>
                            <button class="addbtn" type="submit">Save</button>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p class="text-bold">General</p>
                            <hr />
                        </div>

                        <div class="my-2">
                            <p class="m-0 m-0">
                                The Following is basic information about your project. Fill in
                                the fields below and click save above to save your changes
                            </p>
                        </div>
                        <div class="modalCheckBox">
                            <input type="checkbox" />
                        </div>

                        <div class="row mt-4 p-0">


                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>project Name</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start">
                                <div class="form-group w-100">
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Alpha" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 p-0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>Decsription Name</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start">
                                <div class="form-group w-100">
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 p-0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>Date Project Created</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start">
                                <div>
                                    <p id="date"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 d-flex align-items-center mt-1">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>Date Format</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start">
                                <div class="form-group w-100">
                                    <input type="date" class="form-control" id="date_format" name="date"
                                        placeholder="Alpha" />
                                </div>
                            </div>
                        </div>
                        <div class="row p-0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>Contact's Time Zone Determined by</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start">
                                <select name="type" class="selLead w-100" id="exampleFormControlSelect2 ">
                                    <option selected value="follow Up">No Type</option>
                                    <option value="Call">Call</option>
                                    <option value="Email">Email</option>
                                    <option value="Showing">Showing</option>
                                    <option value="Closing">Closing</option>
                                    <option value="Opne House">Opne House</option>
                                    <option value="Thank You">Thank You</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-0 mt-1">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>Call History Count</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-start mt-1">
                                <p id="status"></p>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="addbtn" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- delete --}}
    <div class="modal fade" id="exampleModalCenterdel" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-3 px-3">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">Delete</p>

                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this?</p>

                    <div class="modalbtnContainer">
                        <form action="/project-delete" method="post">
                            <input type="hidden" name="delete_id" id="delete_id">
                            @csrf
                            @method('DELETE')
                            <button class="cancel" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="addbtn" type="submit">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- copy --}}
    <div class="modal fade" id="exampleModalCentercopy" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-3 px-3">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        Copy Project Setting
                    </p>

                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Please Enter Project Name</label>
                        <input type="text" class="form-control"aria-describedby="emailHelp"
                            placeholder="Project Name" id="copy_link" />
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">
                            Cancel
                        </button>
                        <button class="addbtn copy_to">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- add new project --}}
    <div class="modal fade" id="exampleModalCentercreate" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-3 px-3">
                    <p class="modal-title" id="exampleModalLongTitle">
                        Create new Project
                    </p>

                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="/project" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Project Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="title" placeholder=" Project Name" />
                        </div>

                        <div class="modalbtnContainer">
                            <button class=" cancel" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="addbtn" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-projectfooter />
    <script>
        $(document).ready(function() {

            $('.setting').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: '/edit-project/',
                    data: {
                        id
                    },

                    success: function(data) {
                        // $('#exampleModalCenter5').modal('show');

                        $('#title').val(data.title);
                        $('#description').val(data.description);


                        $('#date').val(data.date);
                        $('#date_format').val(data.date);
                        $('#status').text(data.status);
                        $('#update_id').val(data.id);




                    }
                });

            });

            $('.copy_project').click(function() {
                var id = $(this).data('id');
                $('#copy_link').val(id);
            });
            $('.delete_project').click(function() {

                var id = $(this).data('id');
                $('#delete_id').val(id);
            });
            $('.copy_to').click(function() {
                var id = $('#copy_link').val();
                // Get the text field
                var copyText = $('#copy_link');
                //alert(copyText.val());

                // Select the text field
                copyText.select();
                // copyText.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.val());

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Project Link has been Copied',
                    showConfirmButton: false,
                    timer: 2500
                });


            });

        });
    </script>
{{-- @endsection --}}

</body>
</html>
