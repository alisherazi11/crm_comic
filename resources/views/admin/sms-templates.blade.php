<html>
<head>
    <x-adminhead/>
    <style>
    .adminlistnav {
        margin-top: 1px !important;
    }
    </style>
</head>
<body>
<x-adminsidebar/>
<div class="tableContainer">
    <div id="leftspace" class="leftspacing adminview px-2" style="padding: 2rem !important;">
        <a href="{{url('admin/sms-add')}}" class="btn btn-sm float-right mb-3" style="background-color:#2980B9; color:white;">Add SMS Template</a>
        <h3 class="text-bold text-center mb-3">SMS Templates</h3>
        <div class="table-content mt-5" style="width:100%;">
            <table class="table table-borded table-responsive table-bordered table-hover">
                <thead class="shadow-sm">
                <tr>
                    <th></th>
                    <th scope="col" width="2%">Template Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($smsTemps as $data)
                    <tr>
                        <th width="8%">
                            <a href="{{url('smsTemDelete/'.$data->id)}}">
                                <ion-icon class="closeicon" name="close-circle-outline"
                                          style="font-size:25px;"></ion-icon>
                            </a>
                            <a href="{{url('admin/sms-add/'.$data->id)}}">
                                <ion-icon name="create-outline" style="font-size:25px;"></ion-icon>
                            </a>

                        </th>
                        <td>
                            {{$data->name}}
                        </td>
                        <td>
                            {{$data->status}}
                        </td>
                        <td>
                            {{$data->description}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <x-adminfooter/>
</div>
</body>
</html>
