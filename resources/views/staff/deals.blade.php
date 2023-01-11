<!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead />
        @section('title')
        Fields
        @endsection
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
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="tableWrapper projectTable">
                        <table id="example" class="display table table-striped" style="width: 100%">
                            <thead>
                                <tr class="tabelHeader">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email (Click to Open)</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Mobile Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                            <tr>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td><a href="{{url('reqcontact/'.$item->id)}}">{{ $item->email }}</a></td>
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
                        </tbody>
                    </table>
                </div>
            </div>

             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="tableWrapper projectTable">
                        <table id="example" class="display" style="width: 100%">
                            <thead>
                                <tr class="tabelHeader">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email (Click to Open)</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Mobile Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $(".display").DataTable();
    });
</script>

</body>
</html>