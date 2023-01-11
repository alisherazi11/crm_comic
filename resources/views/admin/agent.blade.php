@extends('admin.layouts.master')
@section('title')
    Remote agent
@endsection
@section('content')
    <div class="leftresultcideBox">
        <div id="leftspace" class="leftspacing">
            <div class="my-2 mb-3 d-flex justify-content-between px-2 align-items-center">
                <div id="adminmenuicon">
                    <ion-icon name="menu" onclick="sideBarHandler()"></ion-icon>
                </div>
                <div class="d-flex ">




                    <button class="addbtn" data-toggle="modal" data-target="#exampleModalCenter5">
                        <i class="fa-solid fa-plus"></i> Add
                    </button>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="tableWrapper projectTable">
                <table id="example" class="display" style="width: 100%">
                    <thead>
                        <tr class="tabelHeader">
                            <th>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" class="mr-2" name="" id="delete_multiple" /> Active
                                </div>
                            </th>
                            <th>Full Name</th>

                            <th>Email</th>

                            <th>Role</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>

                                    <div class="userName1">
                                        <input type="checkbox" name="agents[]" class="agents" value="{{ $item->id }}" />
                                        <div class="tableProfile">AS</div>
                                        <div>
                                            <p class="text-bold">Remote Agent</p>
                                            <p>Developer</p>
                                        </div>
                                    </div>

                                </td>
                                <td>{{ $item->first_name }} &nbsp;{{ $item->last_name }}</td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="msg">
                                            <ion-icon name="mail"></ion-icon>
                                        </div>
                                        <p>{{ $item->email }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="call">
                                            <ion-icon name="person"></ion-icon>
                                        </div>
                                        <p>{{ $item->type }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="msg">
                                            <ion-icon name="lock-closed"></ion-icon>
                                        </div>
                                        <p>.......</p>
                                    </div>
                                </td>
                                <td class="userAction">
                                    <div>
                                        <ion-icon name="create-outline" class="edit_user" data-id="{{ $item->id }}"
                                            data-toggle="modal" data-target="#exampleModalCenter6">
                                        </ion-icon>
                                        <ion-icon data-toggle="modal" class="delete_user" data-id="{{ $item->id }}"
                                            data-target="#exampleModalCenterdel" name="trash-outline">
                                        </ion-icon>
                                        <ion-icon data-toggle="modal" class="view_user" data-id="{{ $item->id }}"
                                            data-target="#exampleModalCenterview" name="eye-outline">
                                        </ion-icon>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Modal add user --}}
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Add Agent
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/add-agent') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="First Name" />
                                <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Last Name" />
                            </div>
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Password" />
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email Address..." />
                            </div>

                            <div class="form-group">
                                <select name="type" class="form-control selectpsacing selLead w-100"
                                    id="exampleFormControlSelect1 ">
                                    <option selected value="User">User</option>
                                    {{-- <option value="Admin">Admin</option>
                                    <option value="Staff">Staff</option> --}}
                                </select>
                            </div>

                            <div>
                                <label for="photo" class="addbtn">
                                    Choose Photo
                                    <input id="photo" name="image" type="file" hidden />
                                </label>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Add Remote Agent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /edit -->
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Edit Agent
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/update-agent') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" class="form-control" id="edit_first" placeholder="First Name"
                                    name="first_name" />
                                <input type="text" class="form-control" id="edit_last" placeholder="Last Name"
                                    name="last_name" />
                            </div>
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="password" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Password" name="new_password" />

                                <input type="email" class="form-control" id="edit_email" placeholder="Change Email"
                                    name="email" />
                            </div>

                            <div class="form-group">
                                <select name="type" class="form-control selectpsacing selLead w-100" id="edit_role">
                                    <option value="user" selected>User</option>
                                    {{-- <option value="Admin">Admin</option>
                                    <option value="Staff">Staff</option> --}}
                                </select>
                            </div>

                            <div>
                                <label for="photo" class="addbtn">
                                    Choose Photo
                                    <input id="photo" name="image" type="file" hidden />
                                    {{-- <input type="hidden" name="old_image" id="old_image"> --}}
                                </label>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Edit Agent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /view details -->
    <div class="modal fade" id="exampleModalCenterview" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        View Details
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="gridRow addgridview">
                            <div class="addprice">
                                <p class="text-bold">Full Name</p>
                                <p class="anchor" id="view_name"></p>
                            </div>

                            <div class="addprice">
                                <p class="text-bold">Number</p>
                                <p class="anchor" id="view_number"></p>
                            </div>
                        </div>
                        <div class="gridRow addgridview">
                            <div class="addprice">
                                <p class="text-bold">Email</p>
                                <p class="anchor" id="view_email"></p>
                            </div>

                            <div class="addprice">
                                <p class="text-bold">Password</p>
                                <p class="anchor">.....</p>
                            </div>
                        </div>
                        <div class="gridRow addgridview m-0">
                            <div class="addprice">
                                <p class="text-bold">Role</p>
                                <p class="anchor" id="view_role"></p>
                            </div>

                        </div>


                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /delete -->
    <div class="modal fade" id="exampleModalCenterdel" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header py-3 px-3">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        Delete
                    </p>

                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/delete-agent') }}" method="post">
                        <input type="hidden" name="delete_id" id="delete_id">
                        @csrf
                        @method('DELETE')
                        <p>Are you sure to delete this?</p>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn">Delete</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.view_user').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: '/admin/view-agent/',
                    data: {
                        id
                    },

                    success: function(data) {
                        $('#exampleModalCenterview').modal('show');
                        $('#view_name').text(data.first_name + data.last_name);
                        if (data.contact) {
                            $('#view_number').text(data.contact);
                        } else {
                            $('#view_number').text('not set yet');
                        }

                        $('#view_email').text(data.email);
                        $('#view_role').text(data.type);


                    }
                });

            });
            $('.edit_user').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: '/admin/edit-agent/',
                    data: {
                        id
                    },

                    success: function(data) {
                        $('#exampleModalCenter6').modal('show');

                        $('#edit_first').val(data.first_name);
                        $('#edit_last').val(data.last_name);


                        $('#edit_email').val(data.email);
                        //$('#old_image').val(data.image);
                        $('#update_id').val(data.id);




                    }
                });

            });


            $('.delete_user').click(function() {

                var id = $(this).data('id');
                $('#delete_id').val(id);
            });
            $('#delete_multiple').click(function() {
                var ids = [];
                $('.agents:checked').each(function() {
                    ids.push($(this).val());
                    console.log(ids);
                });
                //console.log(ids);
                if (ids.length > 0) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/admin/mass-list',
                                type: 'GET',
                                data: {
                                    id: ids
                                },
                                success: function(result) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    );
                                    window.location.reload();
                                }
                            });

                        }
                    });

                } else {
                    Swal.fire({
                        title: 'Invalid',
                        text: "Please Select One Record!",
                        icon: 'warning',
                        showCancelButton: true,

                    });
                }
            });
        });
    </script>
@endsection
