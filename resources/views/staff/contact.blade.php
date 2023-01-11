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
        <div class="tableWrapper projectTable">
            <table id="example" class="display" style="width: 100%">
                <thead>
                    <tr class="tabelHeader">
                        <th>Action</th>
                        <th>
                            First Name
                            <svg preserveAspectRatio="xMinYMid" width="16" height="16" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" fill="currentColor" d="M0 2l6 6v6l4-1v-5l6-6z"></path>
                        </svg>
                    </th>
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
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function () {
      $("#example").DataTable();
    })
</script>
</body>
</html>