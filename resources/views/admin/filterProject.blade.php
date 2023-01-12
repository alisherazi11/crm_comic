<!DOCTYPE html>
<html lang="en">
<head>
    <x-projecthead/>
    @section('title')
        Search Contacts
    @endsection
</head>
<body style="">
<x-projectnavbar/>
<div class="pt-4" style="width:100%; margin-top:-50px;">
    <div class="justify-content-between mb-4">
        <form action="/filter-contacts/{{$id}}" method="post">
            @csrf
            <div class="mt-1">
                <div class="row align-items-center">
                    <div class="col-md-12  mb-2 mt-5">
                        <h3 class="text-bold text-center">Search Contacts</h3>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg-white"
                         style="padding: 0px 15px;border: 1px solid var(--bordercolor) !important; border-radius: 8px !important;">

                        <div class="mt-3">
                            <div class="form-group row ml-0">
                                <label class="col-sm-2 col-form-label">Contact ID</label>
                                <div class="col-sm-4">
                                    <input type="text" name="contact_id" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-4">
                                    <input type="text" name="company" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" name="first_name" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-4">
                                    <input type="text" name="title" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" name="last_name" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Address 1</label>
                                <div class="col-sm-4">
                                    <input type="text" name="address" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">E-Mail</label>
                                <div class="col-sm-4">
                                    <input type="email" name="email" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-4">
                                    <input type="text" name="city" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-4">
                                    <input type="text" name="phone_number" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">State/Province</label>
                                <div class="col-sm-4">
                                    <input type="text" name="state" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Contact Owner</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="user_id">
                                        <option value="">Select Owner</option>
                                        @foreach($users as $user)
                                            <option
                                                value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label">Zip/Postal Code</label>
                                <div class="col-sm-1">
                                    <input type="text" name="zip" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label">Radius in miles</label>
                                <div class="col-sm-1">
                                    <input type="text" name="radius" value="" class="form-control">
                                </div>
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-4">
                                </div>
                                <label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-4">
                                    <input type="text" name="country" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <input type="hidden" name="search_bit" value="1">

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input mt-1" type="checkbox" name="all_projects" value="1"
                                           id="defaultCheck1" style="border-radius: 0.25em !important;">
                                    <label class="form-check-label" for="defaultCheck1">Search in all projects</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input mt-1" name="close_contacts" type="checkbox" value="1"
                                           id="defaultCheck2" style="border-radius: 0.25em !important;">
                                    <label class="form-check-label" for="defaultCheck2">Exclude close contact</label>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary mb-2 float-right"
                                        style="color: #fff !important; background: #0d6efd !important; border-radius: 5px !important;">
                                    Save
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class='col-md-12'>
            <h3 class="text-bold text-center mb-1 mb-3 mt-5">Contacts List</h3>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-white" style="padding: 0px 15px;border: 1px solid var(--bordercolor) !important; border-radius: 8px !important;">
            <div class="leftresultcideBox" style="width: 100% !important; margin: unset;">
                <div id="leftspace" class="leftspacing adminview px-2" style='border: unset !important;'>
                    <div class="mt-3" style="width:100%;">
                        <table class="table table-borded table-responsive table-bordered table-hover" style='display: inline-table'>
                            <thead class="shadow-sm">
                            <tr>
                                <th class="text-center">Contact Id</th>
                                <th class="text-center">Project Name</th>
                                <th class="text-center">User Name</th>
                                <th class="text-center">Company</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone Number</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">City</th>
                                <th class="text-center">State</th>
                                <th class="text-center">Zip</th>
                                <th class="text-center">Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($contacts->count())
                                @foreach($contacts as $data)
                                    <tr class='clickable-row' style="cursor: pointer;"
                                        data-href='{{url('/dashboard/'.(Session::has('pid') ? Session::get('pid') : 0).'/'.$data->id)}}'>
                                        <td class="text-left number">{{$data->id}}</td>
                                        <td>{{isset($data->project->title) ? $data->project->title : ''}}</td>
                                        <td>{{(isset($data->user->first_name )? $data->user->first_name  : '') .' '. (isset($data->user->last_name )? $data->user->last_name  : '')}}</td>
                                        <td>{{$data->company}}</td>
                                        <td>{{$data->first_name.' '.$data->last_name}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->mobile_number}}</td>
                                        <td>{{$data->address}}</td>
                                        <td>{{$data->city}}</td>
                                        <td>{{$data->state}}</td>
                                        <td>{{$data->zip}}</td>
                                        <td>{{$data->country}}</td>
                                    </tr>

                                @endforeach
                            @else
                                <tr style="background-color:white;">
                                    <th class="text-center" style="padding: 10px; border:0px;" colspan="12">No contact in list
                                    </th>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function () {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
    <x-projectfooter/>
{{-- @endsection --}}

</body>
</html>
