<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./css/emaitemplate.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div id="header"></div>
    <sidebar-element></sidebar-element>

    <div class="emailtemplateContainer">
      <div class="email-wrapper">
        <div class="d-flex justify-content-between">
          <h6>Email Templates</h6>
          <button class="addbtn">Save</button>
        </div>

        <div class="contentBox">
          <p>
            By Sending(or allowing to be sent) email messages from VanillaSoft,
            you agree to follow the rules in the United States of the
            <span class="blue">CAN-SPAM ACT</span> In Canada the rules of
            <span class="blue"
              >Canad'sAnti-Spam Legislation ( CASL ), or any simllar spam or
              privacy legislation elsewherein the worl
            </span>
          </p>
        </div>
        <div class="contentBoxselect">
          <p>By Default, Caller in thisProject send email with</p>
          <select name="" id="" class="selLead">
            <option value="">VanillaSoft's Web Email From</option>
          </select>
        </div>

        <p class="my-3">Manage Select Email Templates</p>
        <div class="mangeSel">
          <div class="blankemail">
            <div>
              <select name="" id="" class="selLead">
                <option value="">Blank Email with Signature</option>
              </select>
            </div>
            <div>
              <button class="addbtn">Rename</button>
              <button class="addbtn">Delete</button>
              <button class="addbtn">Add</button>
            </div>
          </div>
          <div class="catgroy mt-3">
            <div class="catwrapper">
              <div>
                <p>Category</p>
              </div>
              <div>
                <select name="" id="" class="selLead">
                  <option value="">No Category</option>
                </select>
              </div>
              <div>
                <button class="addbtn">Add/Eidt Categories</button>
              </div>
            </div>

            <div class="status">
              <p>Status</p>

              <div class=" ">
                <input type="checkbox" class="mr-1" name="" id="" />
                <label for="">Available to Callers </label>
              </div>
            </div>
          </div>
          <div class="catgroy">
            <div class="setcontact mt-3">
              <div>
                <input type="checkbox" name="" id="" />
              </div>
              <div>
                <p>Set Contacts for priority routing</p>
              </div>
              <div>
                <select name="" id="" class="selLead">
                  <option value="">No Category</option>
                </select>
              </div>
              <div>
                <p>after they have opened this email</p>
              </div>
            </div>

            <div>
              <label for="re-open">
                <input type="checkbox" name="" class="mr-2" id="re-open" />
                Re-Open Contacts if Closed
              </label>
            </div>
          </div>
          <div class="catgroy">
            <div class="insetrvariable">
              <p>CC:</p>
              <div class="w-75">
                <div class="form-group d-flex  flex-wrap flex-md-nowrap ">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder=""
                  />
                  <button class="addbtn mt-2">Insert Email Variable</button>
                </div>
              </div>
            </div>
          </div>
          <div class="catgroy">
            <div class="insetrvariable">
              <p>BCC:</p>
              <div class="w-75">
                <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder=""
                  />
                  <button class="addbtn mt-2">Insert Email Variable</button>
                </div>
              </div>
            </div>
          </div>
          <div class="catgroy">
            <div class="insetrvariable">
              <p>Subject:</p>
              <div class="w-75">
                <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="First Name"
                  />
                  <button class="addbtn mt-2  q">Insert Email Variable</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="htmlBody">
          <h6>H6ML Body</h6>
          <p>(Used by VanillaSoft's Web Emaail From)</p>
        </div>

        <div class="massageIconBox">
          <div class="msgBox">
            <div class="headerscrollable" >
            <div class="scrollheader">
            <div class="massageHeader">
              <div class="dropdown">
                <button
                  class="Formats dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Formats
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>

              <div class="threeIcon">
                <i class="fa-solid fa-b"></i>
                <!-- <i class="fa-solid fa-italic"></i> -->
                <img src="./images/italic.png" class="italicPic" alt="">
                <i class="fa-solid fa-u"></i>
              </div>

              <div class="threeIcon">
                <img src="./images/rightIcon.png" alt="" />
                <img src="./images/center.png" alt="" />
                <img src="./images/LeftIcon.png" alt="" />
                <img src="./images/menu (1).png" alt="" />
              </div>
              <div class="threeIcon">
                <ion-icon name="link-outline"></ion-icon>

                <ion-icon name="attach-outline"></ion-icon>
              </div>
              <div class="threeIcon">
                <ion-icon name="image-outline"></ion-icon>
              </div>


              <div class="threeIcon">
                <ion-icon name="list-outline"></ion-icon>
                <ion-icon name="list-outline"></ion-icon>
              </div>
              <div class="threeIcon">
                <img src="./images/rightIcon.png" alt="" />
                <img src="./images/center.png" alt="" />
              </div>

              <div class="dropdown">
                <button
                  class="Formats dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                <ion-icon name="grid-outline"></ion-icon>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="massageHeader massageHeadersencondrwo">
              <div class="dropdown">
                <button
                  class="Formats Verdanadropdown dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Verdana
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown">
                <button
                  class="Formats borderx px-2 Verdanadropdown dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Font Sizes
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown">
                <button
                  class="Formats dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa-solid fa-a"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown">
                <button
                  class="Formats dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa-solid fa-a"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>

              <div class="threeIcon">
                <img src="./images/scissors.png" alt="" />
                <ion-icon name="copy-outline"></ion-icon>
                <ion-icon name="document-outline"></ion-icon>
                <ion-icon name="document-outline"></ion-icon>
              </div>
              <div class="threeIcon">
                <ion-icon name="arrow-undo-outline"></ion-icon>
                <ion-icon name="arrow-redo-outline"></ion-icon>

                <ion-icon name="chevron-back-outline"></ion-icon>
                <ion-icon name="chevron-forward-outline"></ion-icon>
                
                
                <ion-icon name="chevron-forward-outline"></ion-icon>  
              </div>
            </div>
            </div>
          </div>

            <div class="massageBody">
              <div class="mb-3">
                <textarea
                  placeholder="First Name"
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-3 flex-wrap">
              <button class="addbtn  mt-2 "> Insert Unsubscribe Link</button>
              <button class="mt-2 addbtn "> Insert contact Variable</button>
              <button class="addbtn mt-2">Send Test Email</button>
            </div>
          </div>
        </div>
        <div class="htmlBody mx-3">
          <h5>Plain Text Body</h5>
          <p>
            (Used by Appointment Meeting Request Emails,Desktop Email
            Application,e.g. MS Outlook)
          </p>
        </div>

        <div class="massageIconBox">
          <div class="msgBox">
            <div class="mb-3 plaintextares">
              <textarea
                placeholder=""
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-end my-3 flex-wrap">
            <button class="addbtn mb-2">Insert Unsubscribe Link</button>
            <button class="addbtn">Insert contact Variable</button>
          </div>

          <p class="px-3">
            NOTE: When using the Plain Text Body to send emails with a desktop
            Email Application, the maximum number of character allowed is 1000
          </p>
        </div>

        <div>
          <h6 class="mt-4 mb-2 px-2">Email Attachment</h6>
        </div>
        <div class="massageIconBox">
          <p>Publish Files in Documents Library</p>

          <div class="attachmentBox">
            <div class="docuBox"></div>
            <div class="arrowBox">
              <button class="addbtn">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
              <button class="addbtn">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </button>
            </div>
            <div class="docuBox"></div>
          </div>

          <p class="notetext">
            Note: Attachment Cannot be attached to emails when the "Desktop
            Email Application" preference is used. In order to send these
            attachments when using this setting, you can add the "File Name "
            (as it appears in the list box) to the "plain text Body" field. When
            this email template is used to send email, the "File Names will be
            replaced with a link to the attached dcoument"
          </p>
        </div>

        <br>

        <hr>
        <p class="blue text-end">Insert Email Headers (Advanced)</p>
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
      ></script>

      <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"
      ></script>
      <script src="./src/js/core/Header.js"></script>
      <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    </div>
  </body>
</html>
