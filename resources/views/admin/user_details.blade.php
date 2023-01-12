<!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead/>
        @section('title')
        My Project
        @endsection
    </head>
    <body>
        <x-projectnavbar/>
        <div class="tableContainer">
            <nav>
                <div class="nav nav-tabs projectTabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true" onclick="activeUser1()" style="color: #000;">Active
                    Users</a>
                    <a class="nav-item nav-link Projecttabs" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                    role="tab" onclick="activeUser2()" aria-controls="nav-profile" aria-selected="false">Inactive Users</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div id='example_wrapper' class="tab-pane fade show active pt-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="actimeproject" style="border-radius: 0px !important;">
                        <button data-toggle="modal" data-target="#addUserModal" class="btn btn-sm float-right mb-1"
                        style="background-color:#2980B9; color:white;">Add User
                        </button>
                        <div class="tableWrapper projectTable" style="height: fit-content !important;">
                            <div class="table-content table-responsive">
                                <table class="table table-borded table-bordered " id="table-list">
                                    <thead class="table">
                                        <tr>
                                            <th></th>
                                            <th scope="col" width="5%">Active</th>
                                            <th scope="col" width="5%">Last Name</th>
                                            <th scope="col" width="5%">First Name</th>
                                            <th scope="col" width="5%">User Email</th>
                                            <th scope="col" width="5%">Edit Profile</th>
                                            <th scope="col">Edit Dialing Info</th>
                                            <th scope="col">Allow Switching</th>
                                            <th scope="col">My Stats Page</th>
                                            <th scope="col">Current Project</th>
                                            <th scope="col">Team</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($data->count())
                                        @foreach($data as $user)
                                        <tr>
                                            <th width="5%">
                                                <ion-icon data-toggle="modal" class="closeicon delete_user"
                                                data-id="{{ $user->id }}"
                                                data-target="#exampleModalCenterdel" name="close-circle-outline">
                                                </ion-icon>
                                                <!-- <ion-icon class="closeicon" name="close-circle-outline"></ion-icon> -->
                                            </th>
                                            <td>
                                                @if($user->status == 1)
                                                <input type="checkbox" onchange="activeunchecked('{{$user->id}}')"
                                                checked>
                                                @else
                                                <input type="checkbox" onchange="activeunchecked('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                {{$user->last_name}}
                                            </td>
                                            <td>
                                                {{$user->first_name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                @if($user->edit_profile == 1)
                                                <input type="checkbox" onchange="editprofile('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="editprofile('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->edit_dialing_info == 1)
                                                <input type="checkbox" onchange="dialinfo('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="dialinfo('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->allow_switching == 1)
                                                <input type="checkbox" onchange="allowswitch('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="allowswitch('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->my_stats_page == 1)
                                                <input type="checkbox" onchange="mystats('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="mystats('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                <select class="form-control" name="project_id" id="prject_id">
                                                    @foreach($project as $data)
                                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <select class="form-control" name="project_id" id="prject_id">
                                                        <option value="#">Team</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="11">No Record Found</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="actimeproject" style="border-radius: 0px !important;">
                        <button data-toggle="modal" data-target="#addUserModal" class="btn btn-sm float-right mb-1"
                        style="background-color:#2980B9; color:white;">Add User
                        </button>
                        <div class="tableWrapper projectTable">
                            <div class="table-content table-responsive">
                                <table class="table table-borded table-bordered " id="table-list">
                                    <thead class="table">
                                        <tr>
                                            <th></th>
                                            <th scope="col" width="5%">Active</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">User Email</th>
                                            <th scope="col">Edit Profile</th>
                                            <th scope="col">Edit Dialing Info</th>
                                            <th scope="col">Allow Switching</th>
                                            <th scope="col">My Stats Page</th>
                                            <th scope="col">Current Project</th>
                                            <th scope="col">Team</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($inactive->count())
                                        @foreach($inactive as $user)
                                        <tr>
                                            <th width="5%">
                                                <ion-icon data-toggle="modal" class="closeicon delete_user"
                                                data-id="{{ $user->id }}"
                                                data-target="#userDeleteModal" name="close-circle-outline">
                                                </ion-icon>
                                                <!-- <ion-icon class="closeicon" name="close-circle-outline"></ion-icon> -->
                                            </th>
                                            <td>
                                                @if($user->status == 1)
                                                <input type="checkbox" onchange="activeunchecked('{{$user->id}}')"
                                                checked>
                                                @else
                                                <input type="checkbox" onchange="activeunchecked('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                {{$user->last_name}}
                                            </td>
                                            <td>
                                                {{$user->first_name}}hi
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                @if($user->edit_profile == 1)
                                                <input type="checkbox" onchange="editprofile('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="editprofile('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->edit_dialing_info == 1)
                                                <input type="checkbox" onchange="dialinfo('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="dialinfo('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->allow_switching == 1)
                                                <input type="checkbox" onchange="allowswitch('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="allowswitch('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->my_stats_page == 1)
                                                <input type="checkbox" onchange="mystats('{{$user->id}}')" checked>
                                                @else
                                                <input type="checkbox" onchange="mystats('{{$user->id}}')">
                                                @endif
                                            </td>
                                            <td>
                                                <select class="form-control" name="current_project" id="project_id">
                                                    <option
                                                    value="{{$data->current_project}}">{{getprojectname($data->current_project)}}</option>
                                                    @foreach($project as $data)
                                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <script>
                                            $('#project_id').on('change', function () {
                                            alert('hi');
                                            let project = $('#project_id').val();
                                            $.ajax({
                                            type: 'GET',
                                            url: "changeproject/" + project,
                                            success: function (data) {
                                            location.reload();
                                            }
                                            });
                                            })
                                            </script>
                                            <td>
                                                <!-- This section has default value in database already -->
                                                <div class="dropdown">
                                                    <select class="form-control" name="project_id" id="prject_id">
                                                        <option value="default_team">Default Team</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="11">No Record Found</td>
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
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
            aria-labelledby="addUserModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header py-3 px-3">
                        <p class="modal-title text-bold" id="addUserModalTitle">Add User</p>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('add-user')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>First name*</p>
                                    <input type="text" class="form-control" Placeholder="" name="first_name"
                                    required>
                                </div>
                                <div class="col-md-6">
                                    <p>Last name*</p>
                                    <input type="text" class="form-control" Placeholder="" name="last_name"
                                    required>
                                </div>
                                <div class="col-md-6">
                                    <p>User Name*</p>
                                    <input type="text" class="form-control" Placeholder="" name="user_name"
                                    required>
                                </div>
                                <div class="col-md-6">
                                    <p>Email*</p>
                                    <input type="text" class="form-control" Placeholder="" name="email"
                                    required>
                                </div>
                                <div class="col-md-6">
                                    <p class="mt-2">Send Email Using*</p>
                                    <select class="form-select" required name="send_email_using">
                                        <option selected value="Project Default">Project Default</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p class="mt-2">User Time Zone*</p>
                                    <select class="form-select"
                                        name="time_zone" required>
                                        <option value="25">
                                            (UTC-11:00) Coordinated
                                            Universal
                                            Time-11
                                        </option>
                                        <option value="19">
                                            (UTC-10:00) Hawaii
                                        </option>
                                        <option value="20">
                                            (UTC-09:00) Alaska
                                        </option>
                                        <option value="38">
                                            (UTC-08:00) Baja California
                                        </option>
                                        <option value="8">
                                            (UTC-08:00) Pacific Time (US
                                            &amp;
                                            Canada)
                                        </option>
                                        <option value="22">
                                            (UTC-07:00) Arizona
                                        </option>
                                        <option value="37">
                                            (UTC-07:00) Chihuahua, La Paz,
                                            Mazatlan
                                        </option>
                                        <option value="7">
                                            (UTC-07:00) Mountain Time (US
                                            &amp; Canada)
                                        </option>
                                        <option value="26">
                                            (UTC-06:00) Central America
                                        </option>
                                        <option value="6"
                                            selected="">
                                            (UTC-06:00) Central Time (US
                                            &amp;
                                            Canada)
                                        </option>
                                        <option value="36">
                                            (UTC-06:00) Guadalajara, Mexico
                                            City, Monterrey
                                        </option>
                                        <option value="23">
                                            (UTC-05:00) Bogota, Lima, Quito
                                        </option>
                                        <option value="55">
                                            (UTC-05:00) Columbia
                                        </option>
                                        <option value="5">
                                            (UTC-05:00) Eastern Time (US
                                            &amp;
                                            Canada)
                                        </option>
                                        <option value="56">
                                            (UTC-05:00) Ecuador
                                        </option>
                                        <option value="71">
                                            (UTC-05:00) Peru
                                        </option>
                                        <option value="57">
                                            (UTC-05:00) Venezuela
                                        </option>
                                        <option value="4">
                                            (UTC-04:00) Atlantic Time
                                            (Canada)
                                        </option>
                                        <option value="54">
                                            (UTC-04:00) Bolivia
                                        </option>
                                        <option value="42">
                                            (UTC-04:00) Brazil
                                        </option>
                                        <option value="27">
                                            (UTC-04:00) Caracas, Barbados
                                        </option>
                                        <option value="52">
                                            (UTC-04:00) Chile
                                        </option>
                                        <option value="86">
                                            (UTC-04:00) Georgetown, La Paz,
                                            Manaus, San Juan
                                        </option>
                                        <option value="58">
                                            (UTC-04:00) Paraguay
                                        </option>
                                        <option value="41">
                                            (UTC-03:00) Brasilia
                                        </option>
                                        <option value="72">
                                            (UTC-03:00) Brasilia, Recife,
                                            Paulista and Olinda
                                        </option>
                                        <option value="51">
                                            (UTC-03:00) Buenos Aires
                                        </option>
                                        <option value="82">
                                            (UTC-03:00) French Guiana
                                        </option>
                                        <option value="53">
                                            (UTC-03:00) Montevideo
                                        </option>
                                        <option value="3">
                                            (UTC-03:00) Newfoundland
                                        </option>
                                        <option value="75">
                                            (UTC-03:00) Suriname
                                        </option>
                                        <option value="1000">
                                            (UTC-03:30) Newfoundland *
                                        </option>
                                        <option value="1">
                                            (UTC) Edinburgh, Lisbon, London
                                        </option>
                                        <option value="32">
                                            (UTC) Ireland
                                        </option>
                                        <option value="63">
                                            (UTC) Nigeria
                                        </option>
                                        <option value="35">
                                            (UTC) Portugal
                                        </option>
                                        <option value="10">
                                            (UTC+01:00) Brussels,
                                            Copenhagen,
                                            Madrid, Paris
                                        </option>
                                        <option value="62">
                                            (UTC+01:00) West Central Africa
                                        </option>
                                        <option value="79">
                                            (UTC+02:00) Amman
                                        </option>
                                        <option value="15">
                                            (UTC+02:00) Beirut
                                        </option>
                                        <option value="76">
                                            (UTC+02:00) Central Africa
                                        </option>
                                        <option value="45">
                                            (UTC+02:00) Harare, Pretoria
                                        </option>
                                        <option value="33">
                                            (UTC+02:00) Helsinki, Kyiv,
                                            Riga,
                                            Sofia, Tallinn, Vilnius
                                        </option>
                                        <option value="60">
                                            (UTC+02:00) Jerusalem
                                        </option>
                                        <option value="85">
                                            (UTC+03:00) Istanbul
                                        </option>
                                        <option value="40">
                                            (UTC+03:00) Kuwait, Riyadh
                                        </option>
                                        <option value="61">
                                            (UTC+03:00) Moscow, St.
                                            Petersburg, Volgograd
                                        </option>
                                        <option value="64">
                                            (UTC+03:00) Nairobi
                                        </option>
                                        <option value="74">
                                            (UTC+03:00) Riyadh, Doha
                                        </option>
                                        <option value="65">
                                            (UTC+03:00) Tehran
                                        </option>
                                        <option value="66">
                                            (UTC+04:00) Abu Dhabi, Muscat
                                        </option>
                                        <option value="84">
                                            (UTC+04:00) Baku, Tbilisi,
                                            Yerevan
                                        </option>
                                        <option value="50">
                                            (UTC+05:00) Chennai, Kolkata,
                                            Mumbai, New Delhi
                                        </option>
                                        <option value="80">
                                            (UTC+05:00) Islamabad, Karachi
                                        </option>
                                        <option value="81">
                                            (UTC+05:45) Kathmandu
                                        </option>
                                        <option value="73">
                                            (UTC+06:00) Bangladesh
                                        </option>
                                        <option value="46">
                                            (UTC+07:00) Bangkok, Hanoi,
                                            Jakarta
                                        </option>
                                        <option value="77">
                                            (UTC+07:00) Hovd
                                        </option>
                                        <option value="68">
                                            (UTC+07:00) Indochina
                                        </option>
                                        <option value="69">
                                            (UTC+07:00) Myanmar
                                        </option>
                                        <option value="47">
                                            (UTC+07:00) Western Indonesia
                                        </option>
                                        <option value="30">
                                            (UTC+08:00) Beijing, Chongqing,
                                            Urumqi
                                        </option>
                                        <option value="70">
                                            (UTC+08:00) Brunei Darussalam
                                        </option>
                                        <option value="48">
                                            (UTC+08:00) Central Indonesia
                                        </option>
                                        <option value="43">
                                            (UTC+08:00) Hong Kong
                                        </option>
                                        <option value="39">
                                            (UTC+08:00) Malaysia
                                        </option>
                                        <option value="17">
                                            (UTC+08:00) Perth
                                        </option>
                                        <option value="67">
                                            (UTC+08:00) Philippine
                                        </option>
                                        <option value="44">
                                            (UTC+08:00) Singapore
                                        </option>
                                        <option value="78">
                                            (UTC+08:00) Ulaanbaatar
                                        </option>
                                        <option value="12">
                                            (UTC+09:00) Adelaide
                                        </option>
                                        <option value="29">
                                            (UTC+09:00) Darwin
                                        </option>
                                        <option value="49">
                                            (UTC+09:00) Eastern Indonesia
                                        </option>
                                        <option value="59">
                                            (UTC+09:00) Japan
                                        </option>
                                        <option value="31">
                                            (UTC+09:00) Seoul
                                        </option>
                                        <option value="28">
                                            (UTC+10:00) Brisbane
                                        </option>
                                        <option value="11">
                                            (UTC+10:00) Canberra, Melbourne,
                                            Sydney
                                        </option>
                                        <option value="21">
                                            (UTC+10:00) Guam, Port Moresby
                                        </option>
                                        <option value="34">
                                            (UTC+12:00) Auckland, Wellington
                                        </option>
                                        <option value="83">
                                            (UTC+12:00) Fiji, Kamchatka,
                                            Marshall Is.
                                        </option>
                                        <option value="24">
                                            Time Zone Unknown
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p class="mt-2">User Calender Color*</p>
                                    <select class="form-select" required name="calender_color">
                                        <option selected value="Automatic">Automatic</option>
                                    </select>
                                </div>
                                <div class="dropdowntitle d-flex mt-2">
                                    <ion-icon name="chevron-down-outline" class="chevron-down-outline"></ion-icon>
                                    <ion-icon name="chevron-up-outline" class="chevron-up-outline"
                                    style="display:none;"></ion-icon>
                                    <h6>Additional Fields</h6>
                                </div>
                                <hr>
                                <div class="dropdowncontent col-md-12" style="display:none;">
                                    <h6>User Permission</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mt-2">User Status</p>
                                            <p class="mt-2">User Access</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Active</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Location mapping</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">My calender access</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">My email accounts</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">My contacts</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p
                                                class="ml-3 mt-2">Ability to expect my contacts</p>
                                            </span>
                                        </div>
                                        <h6>Reset Password</h6>
                                        <hr>
                                        <div class="col-md-6">
                                            <p>New Password*</p>
                                            <input type="text" class="form-control" Placeholder="" name="password"
                                            required>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Confirm Password*</p>
                                            <input type="text" class="form-control" Placeholder="" name="confirm_password"
                                            required>
                                        </div>
                                        <h6>Accessibility</h6>
                                        <hr>
                                        <div class="col-md-6">
                                            <p class="mt-2">Active accessibility mode</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Appointment setting</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Notifications</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Resize page / Zoom</p>
                                            </span>
                                        </div>
                                        <h6>Dialing Information</h6>
                                        <hr>
                                        <div class="col-md-6">
                                            <p class="mt-2">Line Type</p>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="d-flex">
                                                <input type="radio" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">None</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="radio" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">TIPI</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="radio" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">SIP</p>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">Line Provider</p>
                                            <select class="form-select" required name="calender_color">
                                                <option selected value="Soft Phone">Soft Phone</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">ContactMoVice Number</p>
                                            <select class="form-select" required name="calender_color">
                                                <option selected value="Automatic">1(312)376-9495</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">ContactMoVice Extension</p>
                                            <input type="text" class="form-control" Placeholder="" name="email"
                                            required>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">ContactMoVice Domain</p>
                                            <input type="text" class="form-control" Placeholder="" name="email"
                                            required>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">ContactMoVice Password</p>
                                            <input type="text" class="form-control" Placeholder="" name="email"
                                            required>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">ContactMoVice HUD Link</p>
                                            <input type="text" class="form-control" Placeholder="" name="email"
                                            required>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">SMS Enabled</p>
                                            </span>
                                            <span class="d-flex">
                                                <input type="checkbox" class="form-control ml-1 mt-2"
                                                style="width:10px; height:20px !important;"
                                                name="active"><p class="ml-3 mt-2">Email message to this user when logout</p>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">Dialing</p>
                                            <select class="form-select" required name="send_email_using">
                                                <option selected value="Project Default">Project Default</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mt-2">Pre-Dial</p>
                                            <input type="text" class="form-control" Placeholder="" name="email"
                                            required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modalbtnContainer">
                                @csrf
                                <button class="cancel" data-dismiss="modal">
                                Cancel
                                </button>
                                <button class="addbtn" type="submit">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /delete -->
        <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header py-3 px-3">
                        <p class="modal-title text-bold" id="exampleModalLongTitle">
                            Delete
                        </p>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/delete-user') }}" method="post">
                            <input type="hidden" name="delete_id" id="delete_id">
                            @csrf
                            @method('DELETE')
                            <p>Are you sure to delete this?</p>
                            <div class="modalbtnContainer">
                                <button class="cancel" data-dismiss="modal">Cancel</button>
                                <button class="addbtn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
        const activeUser = document.getElementById("ActiveUser")
        const activeUser1 = () => {
        activeUser.innerHTML = "Active Users"
        }
        const activeUser2 = () => {
        activeUser.innerHTML = "In-Active Users"
        }
        $(".dropdowntitle").click(function (i) {
        var thisEle = $(this).parent().find(".dropdowncontent");
        var oriVisible = false;
        if (thisEle.is(":visible")) {
        oriVisible = true;
        }
        $(".dropdowncontent").hide();
        $(".chevron-down-outline").show();
        $(".chevron-up-outline").hide();
        if (oriVisible) {
        } else {
        thisEle.show();
        $(this).find(".chevron-down-outline").hide();
        $(this).find(".chevron-up-outline").show();
        }
        });
        $('.delete_user').click(function () {
        var id = $(this).data('id');
        $('#delete_id').val(id);
        $("#userDeleteModal").modal('show');
        });
        function activeunchecked(id) {
        $.ajax({
        type: 'GET',
        url: "useractive/" + id,
        success: function (data) {
        location.reload();
        }
        });
        }
        function editprofile(id) {
        $.ajax({
        type: 'GET',
        url: "editprofile/" + id,
        success: function (data) {
        location.reload();
        }
        });
        }
        function dialinfo(id) {
        $.ajax({
        type: 'GET',
        url: "dialinfo/" + id,
        success: function (data) {
        location.reload();
        }
        });
        }
        function allowswitch(id) {
        $.ajax({
        type: 'GET',
        url: "allowswitch/" + id,
        success: function (data) {
        location.reload();
        }
        });
        }
        function mystats(id) {
        $.ajax({
        type: 'GET',
        url: "mystats/" + id,
        success: function (data) {
        location.reload();
        }
        });
        }
        </script>
        <x-projectfooter/>
    </body>
</html>