<!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead />
        @section('title')
        Fields
        @endsection

        <style>
            #nav-contact {
                padding-bottom: 15px !important;
                border-radius: 10px !important;
                border: 1px solid #fff !important;
                background-color: white;
            }
        </style>
    </head>
    <body>
    <x-projectnavbar />
    <div class="tableContainer">
         <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active pt-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="actimeproject" style="border-radius: 0px !important;">

                        <div class="my-2 mb-3 d-flex justify-content-end" style="font-size:30px;">
                            <a href="{{ url('add-contact') }}">
                                <button class="addbtn">
                                <i class="fa-solid fa-plus"></i> Add Contact
                            </button></a>
                            <a href="{{ url('import-contacts') }}">
                                <button class="addbtn">
                                <i class="fa-solid fa-plus"></i> Import Contacts
                            </button></a>
                        </div>

                        <div class="tableWrapper projectTable" style="height: fit-content !important;">
                            <div class="table-content table-responsive" style='margin: auto;'>
                                <table class="table table-borded table-bordered active-users table-hover my-contacts" style="width: 100%" id='table-list'>
                                    <thead class='table'>
                                            <tr class="tabelHeader">
                                                <th></th>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>Last Name</th>
                                                {{-- <th>Email (Click to Open)</th> --}}
                                                <th>Email</th>
                                                <th>Collaborator</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Mobile Number</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($contacts as $item)
                                        <tr>
                                            <td>                        
                                                <a class="badge badge-info" href="{{ url('edit-contact/' . $item->id) }}">
                                                    Edit
                                                </a>
                                                <a class="badge badge-danger" href="{{ url('delete_contacts/' . $item->id) }}">
                                                    Delete
                                                </a>
                                            </td>
                                            <td>{{ $item->first_name }}</td>
                                            <td>{{ $item->last_name }}</td>
                                            <td><a href="{{url('reqcontact/'.$item->id)}}">{{ $item->email }}</a></td>
                                            <td>{{ $item->collaborator ? ($item->collaborator->first_name ." ".$item->collaborator->last_name) : '' }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <p><i class="fa-regular fa-clock"></i> {{ date('d M', strtotime($item->created_at)) }}
                                                </p>
                                            </td>
                                            <td>
                                                <div class="agentTd">
                                                    <div class="agentCircle">
                                                        <ion-icon name="call"></ion-icon>
                                                    </div>
                                                    <p>{{ $item->mobile_number }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <button class="addbtn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Edit -->
<x-projectfooter/>
 <script>
    var oTable;
    $(function(){
        
        if ($('.my-contacts').length) {
            make_table();
            $('.my-contacts').on('draw.dt', function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        }

    });

    function make_table(){
        url = "{{ url('admin/contacts')}}";
        if(oTable !== undefined){
            oTable.clear().destroy();
        }

        var table = $('.my-contacts');
        oTable = table.DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            iDisplayLength: 25,
            ajax: {
                "url": url,
                "type": "GET",
            },
            columns: [
                {data: 'action', name: 'action'},
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'email', name: 'email'},
                {data: 'collaborator', name: 'collaborator'},
                {data: 'title', name: 'title'},
                {data: 'date', name: 'created_at'},
                {data: 'mobile_number', name: 'mobile_number'},
            ],
            fnDrawCallback: function (oSettings) { oTable.page(oSettings.page) },
            "columnDefs": [
                {
                    "searchable":false,
                    "targets":[0]
                },
                {
                    "orderable":false,
                    "targets":[0]
                }
            ],
            "order": [
                [1,'asc']
            ],
        });

    }

</script>
</body>
</html>