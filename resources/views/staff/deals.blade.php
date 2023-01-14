<!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead />
        @section('title')
        Fields
        @endsection

         <style>
            #nav-home, #nav-profile, #nav-calendar {
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
            <nav>
                <div class="nav nav-tabs projectTabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true" onclick="activeUser1()" style="color: #000;">Underwriting</a>
                    <a class="nav-item nav-link Projecttabs" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                    role="tab" onclick="activeUser2()" aria-controls="nav-profile" aria-selected="false">Approved</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane p-3 fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="tableWrapper projectTable" style="height: fit-content !important;">
                        <div class="table-content table-responsive" style='margin: auto;'>
                            <table class="table table-borded table-bordered active-users table-hover underwriting" style="width: 100%" id='table-list'>
                                <thead class='table'>
                                    <tr>
                                        <th></th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        {{-- <th>Email (Click to Open)</th> --}}
                                        <th>Email</th>
                                        <th>Collaborator</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Mobile Number</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($contacts as $item)
                                    <tr>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td><a href="{{url('reqcontact/'.$item->id)}}">{{ $item->email }}</a></td>
                                        <td>{{ $item->collaborator ? ($item->collaborator->first_name ." ".$item->collaborator->last_name) : '' }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <p>{{ date('d M', strtotime($item->created_at)) }}</p>
                                        </td>
                                        <td><p>{{ $item->mobile_number }}</p></td>
                                        <td>
                                            <a class="badge badge-info" href="{{url('edit-contact/'. $item->id)}}">Edit</a>
                                            <a class="badge badge-success" href="">Approve</a>
                                            <a class="badge badge-danger" href="{{url('delete_contacts/'. $item->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                </div>
            </div>

             <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="tableWrapper projectTable" style="height: fit-content !important;">
                    <div class="table-content table-responsive" style='margin: auto;'>
                        <table class="table table-borded table-bordered active-users table-hover approved" style="width: 100%" id='table-list'>
                            <thead class='table'>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    {{-- <th>Email (Click to Open)</th> --}}
                                    <th>Collaborator</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Mobile Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($contacts as $item)
                                <tr>
                                    <td>{{ $item->first_name }}</td>
                                    <td>{{ $item->last_name }}</td>
                                    <td><a href="{{url('reqcontact/'.$item->id)}}">{{ $item->email }}</a></td>
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

<x-projectfooter/>
        <script>
            var oTable;
            $(function(){
                
                if ($('.underwriting').length) {
                    make_table();
                    $('.underwriting').on('draw.dt', function () {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                }

            });

            function make_table(){
                url = "{{ url('deals')}}";
                if(oTable !== undefined){
                    oTable.clear().destroy();
                }

                var table = $('.underwriting');
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


        <script>
            var oTableApproved;
            if(oTableApproved !== undefined){
                oTableApproved.clear().destroy();
            }
            $(function(){
                
                if ($('.approved').length) {
                    make_approved_table();
                    $('.approved').on('draw.dt', function () {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                }

            });

            function make_approved_table(){

                url = "{{ url('deals')}}";

                var table = $('.approved');
                oTableApproved = table.DataTable({
                    destroy: true,
                    processing: true,
                    serverSide: true,
                    iDisplayLength: 25,
                    ajax: {
                        "url": url,
                        "type": "GET",
                    },
                    columns: [
                        {data: 'first_name', name: 'first_name'},
                        {data: 'last_name', name: 'last_name'},
                        {data: 'email', name: 'email'},
                        {data: 'collaborator', name: 'collaborator'},
                        {data: 'title', name: 'title'},
                        {data: 'date', name: 'created_at'},
                        {data: 'mobile_number', name: 'mobile_number'},
                    ],
                    fnDrawCallback: function (oSettings) { oTableApproved.page(oSettings.page) },
                    "order": [
                        [1,'asc']
                    ],
                });

            }

        </script>
</body>
</html>