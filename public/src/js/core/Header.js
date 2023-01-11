const header = document.getElementById("header");
header.innerHTML = `

<nav
class="navbar py-0 px-sm-5 px-1 navbar-expand-lg navbar-light bg-white customeHeader"
>
<a class="navbar-brand P-0 mt-1" href="/return-dashboard">
  <img src="${url}/logo1.png" class="logo img-fluid" style="width:100px;height:100px;" alt="" />
</a>
<button id="barmenu" class="navbar-toggler" type="button">
  <span class="navbar-toggler-icon"></span>
</button>

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
    </li>
    <li class="nav-item">
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
    </li>
  </ul>
  <div class="d-flex align-items-center">

    <a href="# ">
      <button id="showelement" class="addbtn mr-2">show</button></a
    >

    <div class="dropdown userdropdown" >
      <button
        class=" dropdown-toggle headerdropdown"
        style="border-radius: 0px"
        type="button"
        id="dropdownMenuButton"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <div class="profiledropdown">
          <div class="headerProfile">
            <img
              src="${url}/user.png"
              alt=""
            />
          </div>
          <div class="dropdownName">
            <p class="user">User</p>
            <p>Developer</p>
          </div>
          <ion-icon name="chevron-down-outline"></ion-icon>
        </div>
      </button>
      <div
        class="dropdown-menu"
        id="drop"
        aria-labelledby="dropdownMenuButton"
      >
        <a class="dropdown-item" href="/admin">Admin</a>
        <a class="dropdown-item" href="/admin/profile">Profile </a>

        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </div>
  </div>
</div>
</nav>



`;

const showelement = document.getElementById("showelement");
showelement.addEventListener("click", () => {
  localStorage.clear();
  window.location.reload();
});

class Salutation extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `

    <div class="sidebar">
    <div class="d-flex justify-content-center">
      <a class="p-2" href="/">
        <img src="${url}/logo.png" class="logo" alt="" />
      </a>
    </div>
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
        Menu
      </a>
      <div
        class="dropdown-menu mendropdown"
        aria-labelledby="navbarDropdown"
      >
        <a class="dropdown-item menuitem" href="Myproject.html"
          ><img src="${url}/layers.png" alt="" />My Project</a
        >
        <a class="dropdown-item menuitem" href="edit-contact.html"
          ><img src="${url}/useredit.png" alt="" />Edit contact</a
        >
        <a class="dropdown-item menuitem" href="add-contact.html"
          ><img src="${url}/userplus.png" class="userplusIcon"  alt="" />

          Add contact</a
        >
        <a class="dropdown-item menuitem"  href="calendar.html"
          ><img src="${url}/calendar.png"  class="calender" alt="" />Calendar</a
        >
        <a class="dropdown-item menuitem" href="appointments.html"
          ><img src="${url}/appcalendar.png" class="appoinmentIcon"  alt="" />Appointment</a
        >
        <a class="dropdown-item menuitem" href="documents.html"
          ><img src="${url}/folder.png" class="appoinmentIcon"  alt="" /></i>Document</a
        >
        <a class="dropdown-item menuitem" href="my-crm.html"
          ><img src="${url}/portfolio.png" class="bref" alt="" />My
          CRM</a
        >
        <a class="dropdown-item menuitem" href="chart.html"
          ><img src="${url}/typing.png" class="bref" alt="" />My SMS</a
        >
      </div>
    </li>

    <form class=" mt-1 mb-1 " role="search">
      <input
        class="form-control top-search  me-2"
        type="search"
        placeholder="Search"
        aria-label="Search"
      />
      <div class="sidebardropdown">


      <div class="btn-group dropdown-2 m-0 ">
        <button
          class="addbtn dropdown-toggle"
          type="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Search All
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Search All</a></li>
          <li><a class="dropdown-item" href="#">Contact ID</a></li>
          <li><a class="dropdown-item" href="#">Name</a></li>
          <li><a class="dropdown-item" href="#">Company</a></li>
          <li><a class="dropdown-item" href="#">Address</a></li>
          <li><a class="dropdown-item" href="#">City</a></li>
          <li><a class="dropdown-item" href="#">Zip/Postal Code</a></li>
          <li><a class="dropdown-item" href="#">Email</a></li>
          <li><a class="dropdown-item" href="#">Phone</a></li>
        </ul>
      </div>


    </div>

    </form>
    <div class="mb-3">


    </div>

    <div class="mb-3">

    <a href="./reporting.html "> <button class="addbtn mr-2">Show</button></a>


    </div>
    <div class="mb-3">



    </div>


    <div class="dropdown" style="border-radius: 0px">
      <button
        class="btn btn-secondary dropdown-toggle headerdropdown"
        style="border-radius: 0px"
        type="button"
        id="dropdownMenuButton"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <div class="profiledropdown">
          <div class="headerProfile">
            <img
              src="https://avatars.githubusercontent.com/u/92790017?v=4"
              alt=""
            />
          </div>
          <div class="dropdownName">
            <h3>User</h3>
            <p>Developer</p>
          </div>
          <ion-icon name="chevron-down-outline"></ion-icon>
        </div>
      </button>
      <div
        class="dropdown-menu"
        id="drop"
        aria-labelledby="dropdownMenuButton"
      >
        <a class="dropdown-item" href="/admin">Admin</a>
        <a class="dropdown-item" href="#">support</a>
        <a class="dropdown-item" href="#">rob@fundingucapital.com</a>
        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </div>
    </div>
    `;
  }
}

customElements.define("sidebar-element", Salutation);

const barmenu = document.getElementById("barmenu");

const sidebar = document.querySelector(".sidebar");
const togglemenu = () => { };

let toggle = true;
barmenu.addEventListener("click", () => {
  if (toggle) {
    sidebar.style.left = "-100%";
    toggle = !toggle;
  } else {
    sidebar.style.left = "0%";
    toggle = !toggle;
  }
});


        $('#checkcontact').on('keyup',function(){
            let search = $(this).val();
            if(search == ''){
              $('#showcontact').html('');
            }
            else{
              $.ajax({
                type:'GET',
                url:"/searchuser/"+search,
                success:function(data){
                  if(data == ''){
                    $('#showcontact').html('Not Found');
                  }
                  else{
                    $('#showcontact').html(data[0].first_name);
                  }
                  // console.log(data[0].first_name);
                }
            });
            }
        });     
