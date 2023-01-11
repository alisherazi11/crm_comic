@extends('admin.layouts.master')
@section('title')
    User
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

                    <!-- <input
                                                                                                                                                  class="form-control projectsearchBox me-2"
                                                                                                                                                  type="search"
                                                                                                                                                  placeholder="Search"
                                                                                                                                                  aria-label="Search"
                                                                                                                                                /> -->
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
                                    <input type="checkbox" class="mr-2" name="" id="delete_multiple" />Name
                                </div>
                            </th>

                            <th>Type</th>
                            <th>Duration</th>
                            <th>Groups</th>

                            <th>Agents</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compaigns as $item)
                            <tr>
                                <td>
                                    <a href="#">
                                        <div class="userName1">
                                            <input type="checkbox" class="compaigns" name="compaigns[]"
                                                value="{{ $item->id }}" />
                                            <div class="tableProfile">AS</div>
                                            <div>
                                                <p class="text-bold">Compaigns Name</p>
                                                <p>{{ $item->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="call">
                                            <ion-icon name="keypad-sharp"></ion-icon>
                                        </div>
                                        <p>{{ $item->type }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="msg">
                                            <ion-icon name="time"></ion-icon>
                                        </div>
                                        <p>{{ $item->duration }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="call">
                                            <ion-icon name="people"></ion-icon>
                                        </div>
                                        <p>{{ $item->group_name }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="user-contactNumber">
                                        <div class="msg">
                                            <ion-icon name="headset-sharp"></ion-icon>
                                        </div>
                                        <p>{{ $item->agent_name }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <ion-icon name="create-outline" data-id="{{ $item->id }}" class="edit_user"
                                            data-toggle="modal" data-target="#exampleModalCenter6">
                                        </ion-icon>
                                        <ion-icon data-toggle="modal" data-id="{{ $item->id }}" class="delete_user"
                                            data-target="#exampleModalCenterdel" name="trash-outline">
                                        </ion-icon>
                                        <ion-icon data-toggle="modal" data-id="{{ $item->id }}" class="view_user"
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
    </div>
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Add Compagins
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/add-compaign') }}" method="post">
                        @csrf
                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                    placeholder=" Name" />
                                <select class="selLead w-100" name="type" id="">
                                    <option value="">type</option>
                                    <option value="Inbound">Inbound</option>
                                    <option value="Outbound">outbound</option>
                                </select>
                            </div>
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="date" class="form-control" name="duration" id="exampleFormControlInput1"
                                    placeholder=" Duration" />
                            </div>

                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <select class="selLead w-100" name="group_id" id="">
                                    <option value="">Groups</option>
                                    @foreach ($groups as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <select class="selLead w-100" name="agent_id" id="">
                                    <option value="">agent</option>
                                    @foreach ($agents as $item)
                                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Add Compaigns</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- //Edit -->
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Edit Compaigns
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/update-compaign') }}" method="post">
                        <input type="hidden" name="update_id" id="update_id">
                        @csrf
                        @method('PUT')

                        <div class="">
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="text" class="form-control" placeholder=" Name" name="name"
                                    id="edit_name" />
                                <input type="text" class="form-control" placeholder="Type " name="type"
                                    id="edit_type" />
                            </div>
                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <input type="date" class="form-control" placeholder="Duration" name="duration"
                                    id="edit_duration" />
                            </div>

                            <div class="form-group d-flex justify-content-between comaginsspace">
                                <select class="selLead w-100" name="group_id" id="">
                                    <option value="">Groups</option>
                                    @foreach ($groups as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <select class="selLead w-100" name="agent_id" id="">
                                    <option value="">agent</option>
                                    @foreach ($agents as $item)
                                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Edit Compaigns</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- delete -->
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
                    <p>Are you sure to delete this?</p>
                    <form action="{{ url('admin/delete-compaign') }}" method="post">
                        @csrf
                        @method('DELETE')

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- //VIEW -->
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
                                <p class="text-bold">Compaigns Name</p>
                                <p class="anchor"id="view_name"></p>
                            </div>

                            <div class="addprice">
                                <p class="text-bold">Type</p>
                                <p class="anchor"id="view_type"></p>
                            </div>
                        </div>
                        <div class="gridRow addgridview">
                            <div class="addprice">
                                <p class="text-bold">Duration</p>
                                <p class="anchor"id="view_duration"></p>
                            </div>

                            <div class="addprice">
                                <p class="text-bold">Agent</p>
                                <p class="anchor"id="view_agent"></p>
                            </div>
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
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
                        url: '/admin/view-compaign/',
                        data: {
                            id
                        },

                        success: function(data) {


                            $('#exampleModalCenterview').modal('show');
                            $('#view_name').text(data.name);
                            $('#view_agent').text(data.agent_name);
                            $('#view_type').text(data.type);
                            $('#view_duration').text(data.duration);


                        }
                    });

                });
                $('.edit_user').click(function() {
                    var id = $(this).data('id');
                    $.ajax({
                        type: 'GET',
                        url: '/admin/edit-compaign/',
                        data: {
                            id
                        },

                        success: function(data) {
                            $('#exampleModalCenter6').modal('show');
                            $('#update_id').val(id);
                            $('#edit_name').val(data.name);
                            $('#edit_type').val(data.type);


                            $('#edit_duration').val(data.duration);





                        }
                    });

                });


                $('.delete_user').click(function() {

                    var id = $(this).data('id');
                    $('#delete_id').val(id);
                });
                $('#delete_multiple').click(function() {
                    var ids = [];
                    $('.compaigns:checked').each(function() {
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
                                    url: '/admin/mass-compaign',
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
