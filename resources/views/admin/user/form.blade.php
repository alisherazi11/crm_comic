<div class="row">
    <div class="col-xl-6">
        <p class='mt-1'>First name*</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->first_name}}' name="first_name" required>
    </div>
    <div class="col-xl-6">
        <p class='mt-1'>Last name*</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->last_name}}' name="last_name" required>
    </div>
    <div class="col-xl-6">
        <p class='mt-1'>User Name*</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->username}}' name="username" required>
    </div>
    <div class="col-xl-6">
        <p class='mt-1'>Email*</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->email}}' name="email" required>
    </div>
    <div class="col-xl-6">
        <p class='mt-1'>Password*</p>
        <input type="password" class="form-control" Placeholder="" name="password" required>
    </div>
    <div class="col-xl-6">
        <p class="mt-1">Pre-Dial</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->pre_dial}}' name="pre_dial">
    </div>

    <div class="col-xl-6">
        <p class="mt-1">Local Area Code</p>
        <input type="text" class="form-control" Placeholder="" value='{{@$user->local_area_code}}' name="local_area_code">
    </div>

    <div class="col-xl-6">
        <p class="mt-1">User Time Zone*</p>
        <select class="form-select" name="time_zone" id='time_zone' required>
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
            <option value="6">
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

    <div class="col-xl-6">
        <p class="mt-1">Status*</p>
        <select class="form-select" name='status' required>
            <option value='1' {{@$user->status == 1 ? "selected" : ""}}>Active</option>
            <option value='0' {{@$user->status == 0 ? "selected" : ""}}>Inactive</option>
        </select>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-12">
        <h5>Additional Fields</h5>
        <hr>
    </div>
    <div class="col-xl-12">
        <h6>Options</h6>
        <hr>
    </div>
    <div class="col-xl-12">
        <div class='row'>
            <div class='col-xl-5'>
                <p class="mt-2">User Type*</p>
            </div>
            <div class='col-xl-7'>
                <input type='radio' name='user_type' onclick="user_type_change(1)" {{@$user->user_type == 1 ? "checked" : ""}} value='1' id='user_type_1'><label for='user_type_1' required class='ml-2'>Caller</label>
                <br>
                <input type='checkbox' {{@$user->auto_dialing == 1 ? "checked" : ""}} name='auto_dialing' disabled class='ml-4' id='with_auto_dialing_1'><label for='with_auto_dialing_1' class='ml-2'>With Auto-dialing</label>
                <br>
                <input type='checkbox' {{@$user->with_call_recording == 1 ? "checked" : ""}} disabled name='with_call_recording' class='ml-4' id='with_call_recording_1'><label for='with_call_recording_1' class='ml-2'>With Call Recording</label>
            </div>
        </div>


        <div class='row mt-2'>
            <div class='col-xl-5'>
            </div>
            <div class='col-xl-7'>
                <input type='radio' name='user_type' onclick="user_type_change(2)" {{@$user->user_type == 2 ? "checked" : ""}} value='2' id='user_type_2'><label for='user_type_2' required class='ml-2'>Administrator Combo</label>
                <br>
                <input type='checkbox' {{@$user->auto_dialing == 1 ? "checked" : ""}} disabled name='auto_dialing' class='ml-4' id='with_auto_dialing_2'><label for='with_auto_dialing_2' class='ml-2'>With Auto-dialing</label>
                <br>
                <input type='checkbox' {{@$user->with_call_recording == 1 ? "checked" : ""}} disabled name='with_call_recording' class='ml-4' id='with_call_recording_2'><label for='with_call_recording_2' class='ml-2'>With Call Recording</label>
            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-xl-5'>
            </div>
            <div class='col-xl-7'>
                <input type='radio' name='user_type' required value='3' {{@$user->user_type == 3 ? "checked" : ""}} onclick="user_type_change(3)" id='user_type_3'><label for='user_type_3' class='ml-2'>Limited</label>
                <br>
                <input type='checkbox' {{@$user->auto_dialing == 1 ? "checked" : ""}} disabled name='auto_dialing' class='ml-4' id='with_auto_dialing_3'><label for='with_auto_dialing_3' class='ml-2'>With Auto-dialing</label>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-12">
        <h6>VS VoIP Line</h6>
        <hr>
    </div>
    <div class='row mt-2'>
        <div class='col-xl-5'>
            <p class="mt-2">Add VoIP Line to User</p>
        </div>
        <div class='col-xl-7'>
            <input type='radio' name='add_voip_line_to_user' {{@$user->add_voip_line_to_user == 1 ? "checked" : ""}} value='1' id='add_voip_1'><label for='add_voip_1' class='ml-2'>I have an existing VS VoIP line, let me select it now</label>
            <br>
            <input type='radio' name='add_voip_line_to_user' {{@$user->add_voip_line_to_user == 2 ? "checked" : ""}} value='2' id='add_voip_2'><label for='add_voip_2' class='ml-2'>Create a new VS VoIP line</label>
            <br>
            <input type='radio' name='add_voip_line_to_user' {{@$user->add_voip_line_to_user == 3 ? "checked" : ""}} value='3' id='add_voip_3'><label for='add_voip_3' class='ml-2'>No VS VoIP line for now, thanks</label>
        </div>
    </div>
</div>

<div class="my-2 mb-3 mt-5 d-flex justify-content-end" style="font-size:30px;">
    <button class="addbtn" type='submit'>
        Save
    </button>
</div>