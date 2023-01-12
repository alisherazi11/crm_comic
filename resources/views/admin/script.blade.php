{{-- @extends('admin.layouts.index')
@section('content') --}}
<html>
<head>
    <x-adminhead/>
</head>
<body>
<x-adminsidebar/>
<div class="tableContainer">
    <div id="leftspace" class="leftspacing adminview px-2" style="padding: 2rem !important;">
        <button data-toggle="modal" data-target="#exampleModalCenterdel" class="btn btn-sm"
                style="background-color:#369AD0; color:white; float:right;">Add Script
        </button>
        <h3 class="text-bold text-center mb-3">Script</h3>
        <div class="table-content mt-5" style="width:100%;">
            <table class="table table-borded table-responsive table-bordered table-hover">
                <thead class="shadow-sm">
                <tr>
                    <th></th>
                    <th scope="col" width="2%">ID</th>
                    <th scope="col">ScriptTitle</th>
                    <th scope="col">Script Text</th>
                </tr>
                </thead>
                <tbody>
                @foreach($script as $data)
                    <tr>
                        <th width="8%">
                            <a href="{{url('scriptdel/'.$data->id)}}">
                                <ion-icon class="closeicon" name="close-circle-outline"
                                          style="font-size:16px;"></ion-icon>
                            </a>
        </div>
        </th>
        <td>
            {{$data->id}}
        </td>
        <td>
            {{$data->script_title}}
        </td>
        <td>
            {{$data->script_text}}
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>

    </div>
</div>
<div style="margin-left:100px;" class="modal fade" id="exampleModalCenterdel" tabindex="-1" role="dialog"
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
                <form action="{{url('addscript')}}" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Project Id</p>
                            <select name="project_id" class="form-control">
                                @foreach($project as $project_id)
                                    <option class="form-control" value="{{$project_id->id}}"
                                            required>{{$project_id->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Script Title*</p>
                            <input type="text" class="form-control" Placeholder="Script Title" name="script_title"
                                   required>
                        </div>
                        <div class="col-md-8">
                            <p>Script Description*</p>
                            <input type="text" class="form-control" placeholder="Script Description"
                                   name="script_text"></input>
                        </div>
                    </div>
                    <div class="modalbtnContainer">
                        @csrf
                        <button class="cancel" data-dismiss="modal">
                            Cancel
                        </button>
                        <button class="addbtn" type="submit">Add Script</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<x-adminfooter/>
{{-- @endsection --}}

</body>
</html>
