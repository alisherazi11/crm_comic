@extends('admin.layouts.master')
@section('title')
    User Group
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
                            <th> Name</th>



                            <th>Type</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>

                                    <div class="userName1">
                                        <input type="checkbox" name="groups" class="groups" value="{{ $item->id }}" />
                                        <div class="tableProfile">AS</div>
                                        <div>
                                            <p class="text-bold">Group</p>
                                            <p>Developer</p>
                                        </div>
                                    </div>

                                </td>
                                <td>{{ $item->name }}</td>

                                <td>
                                    <div class="user-contactNumber">
                                        <div class="call">
                                            <ion-icon name="person"></ion-icon>
                                        </div>
                                        <p>{{ $item->type }}</p>
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

                        Add Groups
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/add-group') }}" method="post">
                        @csrf
                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder=" Name" />

                            </div>
                            <div class="form-group">
                                <select name="type" class="form-control selectpsacing selLead w-100"
                                    id="exampleFormControlSelect1 ">
                                    <option selected value="follow Up">Groups type</option>
                                    <option value="Call">Assign Agent</option>

                                </select>
                            </div>


                        </div>

                </div>

                <div class="modalbtnContainer">
                    <button class="cancel" data-dismiss="modal">Cancel</button>
                    <button class="addbtn" type="submit">Add Group</button>
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

                        Edit Groups
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/update-group') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder=" Name" id="edit_name" />

                            </div>
                            <div class="form-group">
                                <select name="type" id="edit_type" class="form-control selectpsacing selLead w-100"
                                    id="exampleFormControlSelect1 ">
                                    <option selected value="follow Up">Groups type</option>
                                    <option value="Assign Agent">Assign Agent</option>

                                </select>
                            </div>

                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Edit Group</button>
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
                                <p class="text-bold"> Name</p>
                                <p class="anchor" id="view_name"></p>
                            </div>

                            <div class="addprice">
                                <p class="text-bold">Type</p>
                                <p class="anchor" id="view_type">Assign Agent</p>
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
                    <form action="{{ url('admin/delete-group') }}" method="post">
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
                    url: '/admin/view-group/',
                    data: {
                        id
                    },

                    success: function(data) {
                        $('#exampleModalCenterview').modal('show');


                        $('#view_name').text(data.name);
                        $('#view_type').text(data.type);


                    }
                });

            });
            $('.edit_user').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: '/admin/edit-group/',
                    data: {
                        id
                    },

                    success: function(data) {
                        $('#exampleModalCenter6').modal('show');

                        $('#edit_name').val(data.name);
                        $('#edit_type').val(data.type);
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
                $('.groups:checked').each(function() {
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
                                url: '/admin/mass-user',
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
