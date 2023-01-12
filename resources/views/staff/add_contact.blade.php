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
            <div class="row">
                <div class="col-md-12">
                    <div class="card custome-bg">
                        <div class="card-content collpase show">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{url('add-contact')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="mt-1 bg-white-custome py-1">
                                                <div id="clientDetails">
                                                    <div id="clientPanel">
                                                        <div id="clientName">
                                                            <div class="mb-1 row mt-1">
                                                                <!-- <label for="">Select Project ID *</label> -->
                                                                <div class="col-6 col-sm-12">
                                                                    <select class="form-control" name="project_id" style="display:none;">
                                                                        @foreach($project as $id)
                                                                        @if($id->status == 1)
                                                                        <option value="{{$id->id}}">{{$id->title}}</option>
                                                                        @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row mt-1">
                                                                <div class="col-6 col-sm-6">
                                                                    <input type="text" placeholder="first name"
                                                                    class="form-control" name="first_name"
                                                                    id="input1" />
                                                                </div>
                                                                <div class="col-6 col-sm-6">
                                                                    <input type="text" value=""
                                                                    placeholder="Last Name" name="last_name"
                                                                    class="form-control" id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="title"
                                                                    placeholder="Title" class="form-control"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" value=""
                                                                    name="description" class="form-control"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="text" placeholder="Address"
                                                                    name="address" class="form-control"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <div class="col-4 col-sm-4">
                                                                    <input type="text" placeholder="City"
                                                                    class="form-control" name="city"
                                                                    id="input1" />
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <input type="text" placeholder="State"
                                                                    class="form-control" name="state"
                                                                    id="input1" />
                                                                </div>
                                                                <div class="col-4 col-sm-4">
                                                                    <input type="text" placeholder="Zip"
                                                                    class="form-control" name="zip"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="email"
                                                                    placeholder="Email Address"
                                                                    class="form-control" name="email"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                            <div class="mt-1">
                                                                <input type="checkbox"
                                                                name="email_unsubscribed"
                                                                value="1" /> &nbsp; Email
                                                                Unsubscribed
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <!--tplClient-->
                                                    </div>
                                                    <hr />
                                                    <div class="">
                                                        <div class="mt-1">
                                                            <label for="">Business Number</label><br />
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="text"
                                                                    placeholder="(123)9467768"
                                                                    class="form-control"
                                                                    name="business_number"
                                                                    id="input1" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <i class="fa fa-phone-square"></i> -->
                                                    </div>
                                                    <hr />
                                                    <div class="">
                                                        <div class="mt-1">
                                                            <label for="">Mobile Number</label><br />
                                                            <div class="mb-1 row">
                                                                <div class="col-sm-12">
                                                                    <input type="text"
                                                                    placeholder="(123)9467768"
                                                                    class="form-control"
                                                                    name="mobile_number" id="input1" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <i class="fa fa-phone-square"></i> -->
                                                        <!-- <ion-icon name="call-outline"></ion-icon> -->
                                                        <!-- <img src="./images/phone-call.png" alt=""> -->
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="checkbox" name="sms_opt"
                                                        value="1" />
                                                        &nbsp; SMS Opted Out
                                                    </div>
                                                    <hr />
                                                    <div id="clientPanelStatus">
                                                        <table id="status" class="noTabindex">
                                                            <tbody>
                                                                <tr id="tr_lead_status">
                                                                    <td class="lbl">
                                                                        <label for="ddlLeadStatus"><span
                                                                            data-terminology-key="leadStatusTerm"
                                                                            class="ml-status">Lead
                                                                        Status</span></label>
                                                                    </td>
                                                                    <td>
                                                                        <select class="form-select"
                                                                            id="ddlLeadStatus"
                                                                            data-type="leadStatus"
                                                                            onchange="updateLeadStatus(this)"
                                                                            title="Data Leads"
                                                                            data-value="697931"
                                                                            name="lead_status"
                                                                            data-accessibility-tab="true"
                                                                            style=" background-color: rgb( 240, 248,255);">
                                                                            <option value="0"
                                                                            data-color="#fff"></option>
                                                                            <option value="698053"
                                                                                data-color="#F0F8FF">
                                                                                App/Bank
                                                                            </option>
                                                                            <option value="697931"
                                                                                data-color="#F0F8FF">
                                                                                Data Leads
                                                                            </option>
                                                                            <option value="697607"
                                                                                data-color="#F0F8FF">
                                                                                Dead
                                                                            </option>
                                                                            <option value="698013"
                                                                                data-color="#F0F8FF">
                                                                                Deal Sent
                                                                            </option>
                                                                            <option value="698015"
                                                                                data-color="#F0F8FF">
                                                                                Not Interested
                                                                            </option>
                                                                            <option value="698014"
                                                                                data-color="#F0F8FF">
                                                                                Qualified
                                                                            </option>
                                                                            <option value="698052"
                                                                                data-color="#F0F8FF">
                                                                                Sell Deal
                                                                            </option>
                                                                            <option value="697606"
                                                                                data-color="#F0F8FF">
                                                                                Sold
                                                                            </option>
                                                                            <option value="697930"
                                                                                data-color="#F0F8FF">
                                                                                Web Lead
                                                                            </option>
                                                                            <option value="697605"
                                                                                data-color="#F0F8FF">
                                                                                Working Lead
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="table-spacer"></td>
                                                                    <td class="table-spacer"></td>
                                                                </tr>
                                                                <tr id="tr_contact_time">
                                                                    <td class="">Call Priority</td>
                                                                    <td title="">
                                                                        <input type="text"
                                                                        placeholder="New Web Lead Call"
                                                                        name="call" placeholder=""
                                                                        class="form-control" />
                                                                    </td>
                                                                </tr>
                                                                <tr id="tr_lead_source">
                                                                    <td class="lbl ml-source">
                                                                        <span
                                                                            data-terminology-key="leadSourceNameTerm">Lead
                                                                        Source</span>
                                                                    </td>
                                                                    <td title="">
                                                                        <input type="text"
                                                                        name="lead_source"
                                                                        placeholder="Web Lead"
                                                                        class="form-control" />
                                                                    </td>
                                                                </tr>
                                                                <tr id="tr_contact_id">
                                                                    <td class="lbl ml-id">
                                                                        Lead Source Email
                                                                    </td>
                                                                    <td title="">
                                                                        <input type="text"
                                                                        name="lead_source_email"
                                                                        class="form-control" />
                                                                    </td>
                                                                </tr>
                                                                <tr id="tr_contact_owner">
                                                                    <td class="lbl ml-owner">Time Zone</td>
                                                                    <td title="">
                                                                        <select class="selLead form-select"
                                                                            id="select_ContactTimeZoneID"
                                                                            class="" title="TimeZone"
                                                                            name="time_zone"
                                                                            aria-label="TimeZone"
                                                                            tabindex="0"
                                                                            data-accessibility-tab="true">
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
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end of clienPanel-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="mt-1 bg-white-custome pt-3">
                                                <ul class="nav nav-tabs mb-3 detailanavtabs" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active LeadDeatilsTab"
                                                        id="pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-home" type="button"
                                                        role="tab" aria-controls="pills-home"
                                                        aria-selected="true">
                                                        <img src="{{ asset('images/info.png') }}"
                                                        width="15px" alt="">
                                                        <p> Lead Details</p>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link LeadDeatilsTab"
                                                        id="pills-profile-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profile" type="button"
                                                        role="tab" aria-controls="pills-profile"
                                                        aria-selected="false">
                                                        <img src="{{ asset('images/application.png') }}"
                                                        width="18px" alt="" />
                                                        <p> Application Details</p>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link LeadDeatilsTab"
                                                        id="pills-contact-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact" type="button"
                                                        role="tab" aria-controls="pills-contact"
                                                        aria-selected="false">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <p> Additional Details</p>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content pb-4" id="pills-tabContent">
                                                    {{-- Laed details --}}
                                                    <div class="tab-pane fade show active bg-transparent"
                                                        id="pills-home" role="tabpanel"
                                                        aria-labelledby="pills-home-tab" tabindex="0">
                                                        @foreach(getfields() as $field)
                                                        @if($field->field_tab==1)
                                                        <div class="row mt-1">
                                                            <div class="col-md-4">
                                                                <label for="">{{$field->field_name}}</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="{{$field->field_type}}" class="form-control" name="{{$field->column_name}}" placeholder="{{$field->field_name}}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- Application details --}}
                                                    <div class="tab-pane fade" id="pills-profile"
                                                        role="tabpanel" aria-labelledby="pills-profile-tab"
                                                        tabindex="0">
                                                        @foreach(getfields() as $field)
                                                        @if($field->field_tab==2)
                                                        <div class="row mt-1">
                                                            <div class="col-md-4">
                                                                <label for="">{{$field->field_name}}</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="{{$field->field_type}}" class="form-control" name="{{$field->column_name}}" placeholder="{{$field->field_name}}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- Additional details --}}
                                                    <div class="tab-pane fade" id="pills-contact"
                                                        role="tabpanel" aria-labelledby="pills-contact-tab"
                                                        tabindex="0">
                                                        @foreach(getfields() as $field)
                                                        @if($field->field_tab==3)
                                                        <div class="row mt-1">
                                                            <div class="col-md-4">
                                                                <label for="">{{$field->field_name}}</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="{{$field->field_type}}" class="form-control" name="{{$field->column_name}}" placeholder="{{$field->field_name}}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right mb-2">
                                                    <button type="submit" class="btn btn-info">save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </body>
</html>