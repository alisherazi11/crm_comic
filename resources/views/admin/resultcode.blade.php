{{-- @extends('admin.layouts.index')
@section('content') --}}
<html>
<head>
    <x-adminhead/>
    <style>
        .table-content {
            width: 100%;
            margin: 50px auto;
            text-align: center;
        }

        td {
            width: 100px;
        }

        .adminlistnav {
            margin-top: 1px !important;
        }
    </style>
</head>
<body>
<x-adminsidebar/>
<div class="tableContainer">
    <div id="leftspace" class="leftspacing adminview px-2" style="padding: 2rem !important;">
        <button data-toggle="modal" data-target="#exampleModalCenterdel" class="btn btn-sm float-right mb-3"
                style="background-color:#2980B9; color:white;">Add Result Code
        </button>
        <h3 class="text-bold text-center mb-3">Result Codes</h3>
        <div class="table-content">
            <table class="table table-borded table-responsive table-bordered table-hover" id="table-list">
                <thead class="table">
                <tr>
                    <th width="5%"></th>
                    <th scope="col">Result Code</th>
                    <th scope="col">Result Description</th>
                    <th scope="col">Result Group</th>
                    <th scope="col" width="5%">Active</th>
                    <th scope="col">Result Action</th>
                    <th scope="col">Dialing Action</th>
                    <th scope="col">User Assignment</th>
                    <th scope="col">Lead Status Change</th>
                    <th scope="col" width="5%">Require Comments</th>
                    <th scope="col" width="5%">Recording</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resultcodedata as $datarc)
                    <tr>
                        <th width="5%">
                            <a href="{{url('resultcodedel/'.$datarc->id)}}">
                                <ion-icon class="closeicon" name="close-circle-outline"></ion-icon>
                            </a>
                        </th>
                        <td>
                            <input type="text" class="form-control" name="result_code" id="result_code" data-id="{{$datarc->id}}"  onblur="setPlayLoadData('result_code')" value="{{$datarc->result_code}}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="result_description" id="result_description" data-id="{{$datarc->id}}" onblur="setPlayLoadData('result_description')" value="{{$datarc->result_description}}">
                        </td>
                        <td>
                            <select class="form-select" required name="result_group" id="result_group" data-id="{{$datarc->id}}" onchange="setPlayLoadData('result_group')">
                                <option {{($datarc->result_group == null) ? 'selected': ''}} value=""></option>
                                <option {{($datarc->result_group == 'Contact-Negative') ? 'selected': ''}} value="Contact-Negative">Contact-Negative</option>
                                <option {{($datarc->result_group == 'Contact-Positive') ? 'selected': ''}} value="Contact-Positive">Contact-Positive</option>
                                <option {{($datarc->result_group == 'Contact-SendInfo') ? 'selected': ''}} value="Contact-SendInfo">Contact-SendInfo</option>
                                <option {{($datarc->result_group == 'Contact-callback') ? 'selected': ''}} value="Contact-callback">Contact-callback</option>
                                <option {{($datarc->result_group == 'No Contact') ? 'selected': ''}} value="No Contact">No Contact</option>
                                <option {{($datarc->result_group == 'Unreachables') ? 'selected': ''}} value="Unreachables">Unreachables</option>
                            </select>

                        </td>
                        <td>
                            @if($datarc->active == 1)
                                <input type="checkbox" onchange="activeunchecked('{{$datarc->id}}')" checked>
                            @else
                                <input type="checkbox" onchange="activechecked('{{$datarc->id}}')">
                            @endif
                        </td>
                        <td>
                            <select class="form-select" name="result_action"  data-id="{{$datarc->id}}" id="result_action" onchange="setPlayLoadData('result_action')">
                                <option {{($datarc->result_action == null) ? 'selected': ''}} value=""></option>
                                <option  {{($datarc->result_action == 'End of Queue, Minimum') ? 'selected': ''}} value="End of Queue, Minimum">End of Queue, Minimum</option>
                                <option  {{($datarc->result_action == 'Retry In...') ? 'selected': ''}} value="Retry In...">Retry In...</option>
                                <option  {{($datarc->result_action == 'Retry At') ? 'selected': ''}} value="Retry At">Retry At</option>
{{--                                <optgroup label="Rule Based Routing">--}}
{{--                                    <option {{($datarc->result_group == 'Contact-Negative') ? 'selected': ''}} value="">Not Added Yet</option>--}}
{{--                                    <option {{($datarc->result_group == 'Contact-Negative') ? 'selected': ''}} value="">Not Added Yet</option>--}}
{{--                                </optgroup>--}}
                                <option  {{($datarc->result_action == 'Schedule a Callback') ? 'selected': ''}} value="Schedule a Callback">Schedule a Callback</option>
                                <option  {{($datarc->result_action == 'Stop Trying (un-flag)') ? 'selected': ''}} value="Stop Trying (un-flag)">Stop Trying (un-flag)</option>
                                <option  {{($datarc->result_action == 'Close Contact') ? 'selected': ''}} value="Close Contact">Close Contact</option>
                                <option  {{($datarc->result_action == 'Reload Current Contact') ? 'selected': ''}} value="Reload Current Contact">Reload Current Contact</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select" name="dialing_action" data-id="{{$datarc->id}}" id="dialing_action" onchange="setPlayLoadData('dialing_action')">
                                <option {{($datarc->dialing_action == null) ? 'selected': ''}} value=""></option>
                                <option {{($datarc->dialing_action == 'Dial Next Contact') ? 'selected': ''}} value="Dial Next Contact">Dial Next Contact</option>
                                <option {{($datarc->dialing_action == 'Dial Next Number') ? 'selected': ''}} value="Dial Next Number">Dial Next Number</option>
                                <option {{($datarc->dialing_action == 'Disavle #, Dial Next') ? 'selected': ''}} value="Disavle #, Dial Next">Disavle #, Dial Next</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select" name="user_assignment" data-id="{{$datarc->id}}" id="user_assignment" onchange="setPlayLoadData('user_assignment')">
                                <option {{($datarc->user_assignment == null) ? 'selected': ''}} value=""></option>
                                <option {{($datarc->user_assignment == 'No') ? 'selected': ''}} value="No">No</option>
                                <option {{($datarc->user_assignment == 'User Choice') ? 'selected': ''}} value="User Choice">User Choice</option>
                                <option {{($datarc->user_assignment == 'Specified User') ? 'selected': ''}} value="Specified User">Specified User...</option>
                                <option {{($datarc->user_assignment == 'Specified Team') ? 'selected': ''}} value="Specified Team">Specified Team</option>
                                <option {{($datarc->user_assignment == 'Both User & Team') ? 'selected': ''}} value="Both User & Team">Both User & Team</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select" name="lead_status" data-id="{{$datarc->id}}" id="lead_status" onchange="setPlayLoadData('lead_status')">
                                <option {{($datarc->lead_status == null) ? 'selected': ''}} value=""></option>
                                <option {{($datarc->lead_status == 'No') ? 'selected': ''}} value="No">No</option>
                                <option {{($datarc->lead_status == 'User Choice') ? 'selected': ''}} value="User Choice">User Choice</option>
                                <optgroup label="Specified Lead Status">
                                    <option {{($datarc->lead_status == 'App/Bank') ? 'selected': ''}} value="App/Bank">App/Bank</option>
                                    <option {{($datarc->lead_status == 'Data Leads') ? 'selected': ''}} value="Data Leads">Data Leads</option>
                                    <option {{($datarc->lead_status == 'Dead') ? 'selected': ''}} value="Dead">Dead</option>
                                    <option {{($datarc->lead_status == 'Deal Sent') ? 'selected': ''}} value="Deal Sent">Deal Sent</option>
                                    <option {{($datarc->lead_status == 'Not Interested') ? 'selected': ''}} value="Not Interested">Not Interested</option>
                                    <option {{($datarc->lead_status == 'Qualified') ? 'selected': ''}} value="Qualified">Qualified</option>
                                    <option {{($datarc->lead_status == 'Sell Deal') ? 'selected': ''}} value="Sell Deal">Sell Deal</option>
                                    <option {{($datarc->lead_status == 'Sold') ? 'selected': ''}} value="Sold">Sold</option>
                                    <option {{($datarc->lead_status == 'Web Lead') ? 'selected': ''}} value="Web Lead">Web Lead</option>
                                    <option {{($datarc->lead_status == 'Working lead') ? 'selected': ''}} value="Working lead">Working lead</option>
                                </optgroup>
                            </select>
                        </td>
                        <td>
                            @if($datarc->require_comments == 1)
                                <input type="checkbox" onchange="comunchecked('{{$datarc->id}}')" checked>
                            @else
                                <input type="checkbox" onchange="comchecked('{{$datarc->id}}')">
                            @endif
                        </td>
                        <td>
                            @if($datarc->recording == 1)
                                <input type="checkbox" onchange="recunchecked('{{$datarc->id}}')" checked>
                            @else
                                <input type="checkbox" onchange="recchecked('{{$datarc->id}}')">
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
<div style="margin-left:380px;" class="modal fade" id="exampleModalCenterdel" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:500px;">
            <div class="modal-header py-3 px-3">
                <p class="modal-title text-bold" id="exampleModalLongTitle">Add Result Code</p>

                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{url('addresultcode')}}" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Project ID*</p>
                            <select class="form-select" id="validationCustom04" name="project_id">
                                @foreach($project as $data)
                                    @if($data->status == 1)
                                        <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Result Code*</p>
                            <input type="text" class="form-control" Placeholder="Result Code" name="result_code"
                                   required>
                        </div>
                        <div class="col-md-8">
                            <p>Result Description*</p>
                            <input type="text" class="form-control" placeholder="Result Description"
                                   name="result_description" required>
                        </div>
                    </div>
                    <span>------------------------------------------------------------</span>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Active</p>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" class="form-control" style="width:15px; height:165px;" name="active">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Result Group*</p>
                        </div>
                        <div class="col-md-8">
                            <select class="form-select" id="validationCustom04" required name="result_group">
                                <option value="">Select Result Group</option>
                                <option value="Contact-Negative">Contact-Negative</option>
                                <option value="Contact-Positive">Contact-Positive</option>
                                <option value="Contact-SendInfo">Contact-SendInfo</option>
                                <option value="Contact-callback">Contact-callback</option>
                                <option value="No Contact">No Contact</option>
                                <option value="Unreachables">Unreachables</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Result Action*</p>
                        </div>
                        <div class="col-md-8">
                            <select name="result_action">
                                <option value="">Select Result Action</option>
                                <option value="End of Queue, Minimum">End of Queue, Minimum</option>
                                <option value="Retry In...">Retry In...</option>
                                <option value="Retry At">Retry At</option>
{{--                                <optgroup label="Rule Based Routing">--}}
{{--                                    <option value="">Not Added Yet</option>--}}
{{--                                    <option value="">Not Added Yet</option>--}}
{{--                                </optgroup>--}}
                                <option value="Schedule a Callback">Schedule a Callback</option>
                                <option value="Stop Trying (un-flag)">Stop Trying (un-flag)</option>
                                <option value="Close Contact">Close Contact</option>
                                <option value="Reload Current Contact">Reload Current Contact</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Dialing Action*</p>
                        </div>
                        <div class="col-md-8">
                            <select class="form-select" id="validationCustom04" name="dialing_action" required>
                                <option value="">Select Dialing Action</option>
                                <option value="Dial Next Contact">Dial Next Contact</option>
                                <option value="Dial Next Number">Dial Next Number</option>
                                <option value="Disavle #, Dial Next">Disavle #, Dial Next</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">User Assignment*</p>
                        </div>
                        <div class="col-md-8">
                            <select class="form-select" id="validationCustom04" name="user_assignment" required>
                                <option value="">Select User Assignment</option>
                                <option value="No">No</option>
                                <option value="User Choice">User Choice</option>
                                <option value="Specified User">Specified User...</option>
                                <option value="Specified Team">Specified Team</option>
                                <option value="Both User & Team">Both User & Team</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Lead Status Change*</p>
                        </div>
                        <div class="col-md-8">
                            <select class="form-select" id="validationCustom04" name="lead_status" required>
                                <option value="No">No</option>
                                <option value="User Choice">User Choice</option>
                                <optgroup label="Specified Lead Status">
                                    <option value="App/Bank">App/Bank</option>
                                    <option value="Data Leads">Data Leads</option>
                                    <option value="Dead">Dead</option>
                                    <option value="Deal Sent">Deal Sent</option>
                                    <option value="Not Interested">Not Interested</option>
                                    <option value="Qualified">Qualified</option>
                                    <option value="Sell Deal">Sell Deal</option>
                                    <option value="Sold">Sold</option>
                                    <option value="Web Lead">Web Lead</option>
                                    <option value="Working lead">Working lead</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Save Recordings*</p>
                        </div>
                        <div class="col-md-8">
                            <input type="checkbox" class="form-control" name="recording"
                                   style="width:15px; height:165px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mt-2">Require Comments*</p>
                        </div>
                        <div class="col-md-8">
                            <input type="checkbox" class="form-control" name="require_comments"
                                   style="width:15px; height:165px;">
                        </div>
                    </div>
                    <div class="modalbtnContainer">
                        @csrf
                        <button class="cancel" data-dismiss="modal">
                            Cancel
                        </button>
                        <button class="addbtn" type="submit">Add Result</button>
                </form>

            </div>
        </div>
    </div>
</div>

<x-adminfooter/>
<script>
    function recchecked(id) {
        $.ajax({
            type: 'GET',
            url: "recchecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }

    function recunchecked(id) {
        $.ajax({
            type: 'GET',
            url: "recunchecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }

    function comchecked(id) {
        $.ajax({
            type: 'GET',
            url: "comchecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }

    function comunchecked(id) {
        $.ajax({
            type: 'GET',
            url: "comunchecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }

    function activechecked(id) {
        $.ajax({
            type: 'GET',
            url: "activechecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }

    function activeunchecked(id) {
        $.ajax({
            type: 'GET',
            url: "activeunchecked/" + id,
            success: function (data) {
                location.reload();
            }
        });
    }
    function setPlayLoadData(name){
        var elem =  $('#'+name);
        var resultCodeId = elem.data('id');
        var arrayReq = {
            'id': resultCodeId,
            'value': elem.val(),
            'field': name
        }
        setTimeout(function() { updateResultCode(arrayReq); }, 1000);
    }
    function updateResultCode(arrayRequest){
        $.ajax({
            url: '/resultCodeEdit',
            data: arrayRequest,
            dataType: 'text',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (data) {
                toastr.success("Result Code Updated Successfully.");
            }
        });

    }

</script>
{{-- @endsection --}}


</body>
</html>
