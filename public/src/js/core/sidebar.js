class Salutation2 extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
  
      <div class="custom_side-bar">
      <ul
        
        
      >
        <li class="">
          <a href="#"
            ><img src="${url}/backgray.png" alt=""><span class="menu-title"
              >Go Back</span
            ></a
          >
        </li>
       <li class="">
          <a href="/dashboard"
            ><img src="${url}/graydashboard.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Dashboard</span
            ></a
          >
        </li>
        <li class="">
          <a href="/search"
            ><img src="${url}/graysearch.png" alt=""><span class="menu-title"
              >Search</span
            ></a
          >
        </li>
        <li class="">
          <a href="/add-contact"
            ><img src="${url}/useredit.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Edit Contact</span
            ></a
          >
        </li>
        <li class="">
          <a href="/add-contact"
            ><img src="${url}/user.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Add Contact</span
            ></a
          >
        </li>
        <li class="">
          <a href="/calendar"
            ><img src="${url}/graycalendar.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Calendar</span
            ></a
          >
        </li>
        <li class="">
          <a href="/appointment"
            ><img src="${url}/appgray.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Appointments</span
            ></a
          >
        </li>
        <li class=" active">
          <a href="/documents"
            ><img src="${url}/grayfolder.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Documents</span
            ></a
          >
        </li>
        <li class="">
          <a href="/admin/crm"
            ><img src="${url}/portfolio.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >MY CRM</span
            ></a
          >
        </li>
      </ul>
    </div>
      `;
  }
}

customElements.define("sidebar2-element", Salutation2);
/*
 <li class="">
          <a href="/my-dashboard"
            ><img src="${url}/graydashboard.png" alt=""><span class="menu-title"
            ><span class="menu-title"
              >Dashboard</span
            ></a
          >
        </li>
*/
