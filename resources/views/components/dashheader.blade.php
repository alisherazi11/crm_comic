<nav
class="navbar py-0 px-sm-5 px-1 mb-4 navbar-expand-lg navbar-light bg-white customeHeader"
>
<a class="navbar-brand P-0 mt-1" href="/return-dashboard">
  <img src="{{asset('images/logo1.png')}}" class="logo img-fluid" style="width:100px;height:100px;" alt="" />
</a>
<button id="barmenu" class="navbar-toggler" type="button">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item dropdown user-header">
      <a style="color:black; margin-left:20px;"
        class=" dropdown-toggle"
        href="#"
        id="navbarDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        Menu
      </a>
<div
        class="dropdown-menu mendropdown"
        aria-labelledby="navbarDropdown"
      >
        <a class="dropdown-item menuitem" href="/project"
          ><img src="${url}/layers.png" alt="" />My Project</a
        >
        <a class="dropdown-item menuitem" href="/add-contact"
          ><img src="${url}/useredit.png" alt="" />Edit contact</a
        >
        <a class="dropdown-item menuitem" href="/add-contact"
          ><img src="${url}/userplus.png" class="userplusIcon" alt="" />

          Add contact</a
        >
        <a class="dropdown-item menuitem" href="/calendar"
          ><img
            src="${url}/calendar.png"
            class="calender"
            alt=""
          />Calendar</a
        >

          <a class="dropdown-item menuitem" href="/admin/contacts"
            ><img src="${url}/contact.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >My Contacts</span
            ></a
          >

        <a class="dropdown-item menuitem" href="/appointment"
          ><img
            src="${url}/appcalendar.png"
            class="appoinmentIcon"
            alt=""
          />Appointment</a
        >
        <a class="dropdown-item menuitem" href="/documents"
          ><img
            src="${url}/folder.png"
            class="appoinmentIcon"
            alt=""
          />Document</a
        >
        <a class="dropdown-item menuitem" href="/admin/crm"
          ><img src="${url}/portfolio.png" class="bref" alt="" />My
          CRM</a
        >
        <a class="dropdown-item menuitem" href="/admin/chat"
          ><img src="${url}/typing.png" class="bref" alt="" />My SMS</a
        >
      </div>
        <a style="color:black; margin-left:20px; {{(request()->is('project')) ? 'background-color: #2980B9; color:white; padding: 10px; border-radius:10px;' : ''}}" href="/project"
        >Project</a
        >
        <a style="color:black; margin-left:20px; {{(request()->is('user')) ? 'background-color: #2980B9; color:white; padding: 10px; border-radius:10px;' : ''}}" href="/user"
        >User</a
        >
        <a style="color:black; margin-left:20px; {{(request()->is('newdashboard')) ? 'background-color: #2980B9; color:white; padding: 10px; border-radius:10px;' : ''}}" href="{{url('newdashboard')}}"
        >Dashboard</a
        >
    </li>
    <!-- <li class="nav-item">
      <form class="d-flex mt-1 mb-1 align-items-center" role="search">
        <input
          class="form-control  headerserachBox"
          type="text" id="checkcontact"
          placeholder="Search"
        />
        <div id="showcontact"></div>
        <select class="selLead searchall" name="" id="">
          <option>Search All</option>
          <option>Contact ID</option>
          <option>Name</option>
          <option>Company</option>
          <option>Address</option>
          <option>City</option>
          <option>Zip/Postal Code</option>
          <option>Email</option>
          <option>Phone</option>
        </select>
      </form>
    </li> -->
  </ul>
  <div class="d-flex align-items-center">

    <!-- <a href="# ">
      <button id="showelement" class="addbtn mr-2">show</button></a
    > -->
    <div class="dropdown userdropdown" >
          <!-- <div class="headerProfile">
            <img
              src="${url}/user.png"
              alt=""
            />
          </div> -->
          <div class="row">
            <div class="col-sm-2" style="margin-top:17px">
                @if(Session::has('pid') && Route::current()->getName() != 'project')
                    <a style="color:black; margin-left:20px; {{(request()->is('dashboard')) ? 'background-color: #2980B9; color:white; padding-right: 20px; border-radius:10px;' : ''}}"
                       href="/dashboard/{{Session::get('pid')}}"
                    >Caller</a
                    >
                @endif
            </div>
            <div class="col-sm-1 mt-1" style="margin-left:30px; {{ (Session::has('pid') && Route::current()->getName() != 'project') ? 'margin-right: -60px;' : 'margin-right: -10px;'}}">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item dropdown user-header">
                  <a
                    class="nav-link headerLink dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Admin
                  </a>
                  <div
                    class="dropdown-menu mendropdown"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item menuitem" href="{{url('admin/resultcode')}}"
                      ><img src="{{asset('images/layers.png')}}" alt="" />Resutl Code</a
                    >
                    <a class="dropdown-item menuitem" href="{{url('admin/emailsms')}}"
                      ><img src="{{asset('images/useredit.png')}}" alt="" />Email & SMS</a
                    >
                    <a class="dropdown-item menuitem" href="{{url('admin/script')}}"
                      ><img src="{{asset('images/userplus.png')}}" class="userplusIcon" alt="" />

                      Script</a
                    >
                    <a class="dropdown-item menuitem" href="{{url('admin/email-send')}}"
                      ><img
                        src="{{asset('images/calendar.png')}}"
                        class="calender"
                        alt=""
                      />Email</a
                    >

                      <a class="dropdown-item menuitem"  href="{{url('admin/sms-templates')}}"
                        ><img src="{{asset('images/mail.png')}}" alt=""><span class="menu-title"
                        ><span class="menu-title"
                          >SMS</span
                        ></a
                      >
                      <a class="dropdown-item menuitem" href="/order-route">
                          <img src="{{asset('images/graysettings.png')}}" alt=""><span class="menu-title">
                                                <span class="menu-title">Order Route</span>
                      </a>

                    <a class="dropdown-item menuitem" href="/order-route">
                      <img src="{{asset('images/graysettings.png')}}" alt=""><span class="menu-title">
                                                <span class="menu-title">Fields</span>
                    </a>
                  </div>
                </li>
              </ul>
          </div>
        </div>
</div>
</div>
          <a href="/logout"><button class="btn btn-sm btn-danger" style="margin-top:10px;">Logout</button></a>
      </button>
      <!-- <div
        class="dropdown-menu"
        id="drop"
        aria-labelledby="dropdownMenuButton"
      >
        <a class="dropdown-item" href="/admin">Admin</a>
        <a class="dropdown-item" href="/admin/profile">Profile </a>

        <a class="dropdown-item" href="/logout">Logout</a>
      </div> -->
    </div>
  </div>
</div>
</nav>
