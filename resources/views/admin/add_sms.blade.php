@extends('admin.layouts.index')
@section('content')
    {{-- <div class="leftresultcideBox">
        <div id="leftspace" class="leftspacing adminview px-2">
            <div class="p-2" id="adminmenuicon">
                <ion-icon name="menu" onclick="sideBarHandler()"></ion-icon>
            </div>
            <h3 class="text-bold text-center mb-3">Result Code</h3>
            <button data-toggle="modal" data-target="#exampleModalCenterdel" class="btn btn-sm" style="background-color:#369AD0; color:white;">Add Result Code</button>
            <div class="container mt-5" style="width:100%;">
            <table class="table table-striped table-hover table-responsive">
            <thead class="shadow-sm">
                <tr>
                <th></th>
                <th scope="col" width="2%">Result Code</th>
                <th scope="col">Result Description</th>
                <th scope="col">Result Group</th>
                <th scope="col">Active</th>
                <th scope="col">Result Action</th>
                <th scope="col">Dialing Action</th>
                <th scope="col">User Assignment</th>
                <th scope="col">Lead Status Change</th>
                <th scope="col">Require Comments</th>
                <th scope="col">Recording</th>
                </tr>
            </thead>
            <tbody>
              @foreach($resultcodedata as $datarc)
                <tr>
                  <th width="8%">
                    <a href="{{url('resultcodedel/'.$datarc->id)}}">
                      <ion-icon class="closeicon" name="close-circle-outline" style="font-size:16px;"></ion-icon>
                      </a>
                    </div>
                  </th>
                <td>
                    <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->result_code}}" readonly>
                </td>
                <td>
                    <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->result_description}}" readonly>
                </td>
                <td>
                <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->result_group}}" readonly>
                <!-- <select class="form-select" id="validationCustom04" required>
                        <option value="">Select Result Group</option>
                            <option value="Contact-Negative">Contact-Negative</option>
                            <option value="Contact-Positive">Contact-Positive</option>
                            <option value="Contact-SendInfo">Contact-SendInfo</option>
                            <option value="Contact-callback">Contact-callback</option>
                            <option value="No Contact">No Contact</option>
                            <option value="Unreachables">Unreachables</option>
                </select> -->
                </td>
                <td>
                  @if($datarc->active == 1)
                    <input type="checkbox" onchange="activeunchecked('{{$datarc->id}}')" checked>
                    @else
                    <input type="checkbox" onchange="activechecked('{{$datarc->id}}')">
                    @endif
                </td>
                <td>
                  <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->result_action}}" readonly>
                </td>
                <td>
                  <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->dialing_action}}" readonly>
                </td>
                <td>
                  <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->user_assignment}}" readonly>
                </td>
                <td>
                  <input class="form-select" id="validationCustom04" type="text" value="{{$datarc->lead_status}}" readonly>
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
    </div> --}}
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="width:100%; height:100%">
                <div class="modal-header py-3 px-3">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">Add SMS Template</p>

                    <div>
                        
                    </div>
                </div>
                <div class="modal-body">
                <form action="{{url('addresultcode')}}" method="post">
                  <div class="row">
                      <!-- <div class="col-md-4">
                        <p>Result Code*</p>
                        <input type="text" class="form-control" Placeholder="Result Code" name="result_code" required>
                      </div> -->
                      <div class="col-md-12">
                        <p>SMS Template</p>
                        <input type="text" class="form-control" placeholder="SMS Template" name="result_description" required>
                      </div>
                  </div>
                    <div class="modalbtnContainer">
                            @csrf
                            <!-- <button class="cancel" data-dismiss="modal">
                                Cancel
                            </button> -->
                            <button class="addbtn" type="submit">Add SMS</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      function recchecked(id){
        $.ajax({
            type:'GET',
            url:"recchecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
      function recunchecked(id){
        $.ajax({
            type:'GET',
            url:"recunchecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
      function comchecked(id){
        $.ajax({
            type:'GET',
            url:"comchecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
      function comunchecked(id){
        $.ajax({
            type:'GET',
            url:"comunchecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
      function activechecked(id){
        $.ajax({
            type:'GET',
            url:"activechecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
      function activeunchecked(id){
        $.ajax({
            type:'GET',
            url:"activeunchecked/"+id,
            success:function(data){
                  location.reload();
                }
            });
      }
    </script>
@endsection
