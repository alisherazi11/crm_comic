@extends('admin.layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <div class="leftresultcideBox">
        <div id="leftspace" class="leftspacing p-3">
            <div class="userdetailscontainer">
                <div class=" d-flex justify-content-center ">
                    <div class="userName1">
                        <div class="cirlcleprofile"> <img src="{{ asset('images/user.png') }}" alt=""></div>
                        <div>
                            <p class="text-bold ">User</p>
                            <p>{{ $user->email ?? 'abc@gmail.com' }}</p>



                        </div>
                    </div>
                </div>
                <ul class="nav profileheader mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="aboutme" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false"><img
                                src="{{ asset('images/grayedit.png') }}" alt="" /></a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="userTable">
                                    <tbody>
                                        <tr>
                                            <th>Full Name</th>
                                            <td>{{ $user->first_name }}&nbsp;{{ $user->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Number</th>
                                            <td>{{ $user->phone ?? '+92*******' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Birth Date</th>
                                            <td>{{ date('M d,Y', strtotime($user->dob)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td>{{ $user->gender }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="userTable">
                                    <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr>

                                        <tr>
                                            <th>Details</th>
                                            <td>{{ $user->detail ?? 'Lorem ipsum' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="userform">
                            <div>
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


                                <form action="{{ url('/admin/profile-update') }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group d-flex gap-3">
                                        <input type="text" class="form-control mr-4" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="First Name" name="first_name"
                                            value="{{ $user->first_name ?? old('first_name') }}" />

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Last Name" name="last_name"
                                            value="{{ $user->last_name ?? old('last_name') }}" />

                                    </div>

                                    <div class="form-group d-flex gap-3">
                                        <input type="email" class="form-control mr-4" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Email" name="email"
                                            value="{{ $user->email ?? old('email') }}" />

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Phone Number" name="phone"
                                            value="{{ $user->phone ?? old('phone') }}" />

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check mr-4">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="exampleRadios1" value="Male"
                                                {{ $user->gender == 'Male' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="exampleRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="exampleRadios2" value="Female"
                                                {{ $user->gender == 'Female' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="exampleRadios2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex gap-3 mt-2">
                                        <input type="date" class="form-control mr-4" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="date of birth" name="dob"
                                            value="{{ $user->dob ?? old('dob') }}" />

                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Address" name="address"
                                            value="{{ $user->address ?? old('address') }}" />

                                    </div>

                                    <button class="addbtn" type="submit">Save</button>
                                    <button class="cancel">Cencel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
