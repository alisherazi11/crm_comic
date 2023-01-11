<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body onload="showdiv()">
    <sidebar-element></sidebar-element>

    <!-- ///header -->

    <div id="header"></div>

    <div class="mainContainer">
        <div class="firstDiv">
            <div class="contactDetailsScrollableBox">
                <div class="icondiv">
                    <div class="accordion" id="accordionExample">
                        <div class="card collapsCard border-bottom">
                            <div class="card-header profileCollasp" id="headingNine">
                                <h5 class="mb-0">
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <ion-icon data-toggle="collapse" data-target="#collapseNine"
                                                aria-expanded="false" aria-controls="collapseNine" name="remove-outline"
                                                class="collapsed"></ion-icon>

                                            <ion-icon id="crossIcon1" name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                            <div id="collapseNine" class="collapse show" aria-labelledby="headingNine"
                                data-parent="#accordion">
                                <div class="card-body collapsCardBody">
                                    <div class="profileContaier">
                                        <div class="profile">
                                            <h3>CS</h3>
                                        </div>
                                        <div class="content" data-toggle="modal" data-target="#exampleModalCenter6">
                                            <h6 class="text-bold h6">Christopher Short</h6>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- <div class="contact-details"> -->
                                    <div class="m-0 p-2 contact-details">
                                        <div class="">
                                            <div class="homeAddress">
                                                <img width="18px" src="./images/user.png" wi alt="" />
                                                <p data-toggle="modal" data-target="#exampleModalCenter3">
                                                    User Name
                                                </p>
                                            </div>

                                            <div class="homeAddress">
                                                <img src="./images/home.png" width="18px" alt="" />

                                                <p style="margin-top: 28px" data-toggle="modal"
                                                    data-target="#exampleModalCenter3">
                                                    1421 Bankert Ter <br />
                                                    Abingdon, MD 21009
                                                    <!-- <span class="grayColor"> (home)</span> -->
                                                </p>
                                            </div>

                                            <div class="homeAddress">
                                                <img src="./images/email.png" width="18px" alt="" />
                                                <p>Add email</p>
                                            </div>
                                            <div class="homeAddress">
                                                <div class="phoneNumber">
                                                    <img src="./images/phone-call.png" width="18px" class="mr-1"
                                                        alt="" />
                                                    <p data-toggle="modal" data-target="#exampleModalCenter">
                                                        (210) 782-1640
                                                    </p>

                                                    <div class="iconBox">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            fill="#fff">
                                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="numberBox">
                                                <div class="d-flex align-items-center">
                                                    <p class=""></p>
                                                </div>
                                                <!-- <div class="d-flex">
                          <div class="iconBox mx-2">
                            <i class="fa-solid fa-comment-sms"></i>
                          </div>
                          <div class="iconBox">
                            <i class="fa-solid fa-phone"></i>

                          </div>
                        </div> -->
                                            </div>
                                            <!-- <div class="homeAddress">
                          <img
                            src="./images/phone-call.png"
                            width="18px"
                            alt=""
                          />
                          <p
                            data-toggle="modal"
                            data-target="#exampleModalCenter2"
                          >
                            (989)121-3121
                          </p>
                        </div> -->
                                        </div>

                                        <div class="mt-2 d-flex justify-content-end">
                                            <div class="userBtnBox">
                                                <a href="resultCode.html"><button class="eidt">Result</button></a>
                                                <button class="eidt">Wrong#</button>

                                                <button class="eidt">NoInterest</button>
                                                <button class="eidt">Bad Wt</button>

                                                <button class="eidt">Nc Dale</button>
                                                <button class="eidt">Nc Web</button>

                                                <button class="eidt">DoNotCall</button>
                                                <button class="eidt">Not Qua</button>

                                                <button class="eidt">Secelary</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>

            <div class="accordion detailbox">
                <div class="card collapsCard">
                    <div class="card-header collapsCadHeader" id="headingThree">
                        <h5 class="mb-0">
                            <div class="detail">
                                <div>
                                    <!-- <i class="fa-solid fa-list"></i> -->
                                    <ion-icon name="list-outline"></ion-icon>
                                    <p class="text-bold">Details</p>
                                </div>
                                <div>
                                    <ion-icon data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree" name="remove-outline"
                                        class="collapsed"></ion-icon>

                                    <ion-icon id="crossIcon2" name="close-outline"></ion-icon>

                                    <!-- <i  class="fa-solid fa-xmark"></i> -->
                                </div>
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                        data-parent="#accordion">
                        <div class="card-body collapsCardBody">
                            <div class="detailBoxScrollable">
                                <div class="detailsBox">
                                    <div class="liBox">
                                        <p>
                                            <span> Lead Status </span>
                                            <select class="selLead" name="" id="">
                                                <option value="0" data-color="#fff">-----</option>
                                                <option value="698053" data-color="#F0F8FF">
                                                    App/Bank
                                                </option>
                                                <option value="697931" data-color="#F0F8FF">
                                                    Data Leads
                                                </option>
                                                <option value="697607" data-color="#F0F8FF">
                                                    Dead
                                                </option>
                                                <option value="698013" data-color="#F0F8FF">
                                                    Deal Sent
                                                </option>
                                                <option value="698015" data-color="#F0F8FF">
                                                    Not Interested
                                                </option>
                                                <option value="698014" data-color="#F0F8FF">
                                                    Qualified
                                                </option>
                                                <option value="698052" data-color="#F0F8FF">
                                                    Sell Deal
                                                </option>
                                                <option value="697606" data-color="#F0F8FF">
                                                    Sold
                                                </option>
                                                <option value="697930" data-color="#F0F8FF">
                                                    Web Lead
                                                </option>
                                                <option value="697605" data-color="#F0F8FF">
                                                    Working Lead
                                                </option>
                                            </select>
                                        </p>
                                        <p><span>Contact's Time </span>10:55 AM</p>
                                        <p><span>Contact ID </span>923446137</p>
                                        <p><span>Lead Source </span>Data</p>
                                        <p><span> Contact Owner </span>Data</p>
                                        <p><span> Added on </span>09/06/2022 08:57 AM</p>

                                        <div>
                                            <textarea name="" id="" class="textArea"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="addbtn ml-0">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middleBox">
            <div class="accordion hidedleaddetailsBox" id="accordionExample">
                <div class="card collapsCard border-bottom">
                    <div class="card-header profileCollasp" id="headingTen">
                        <h5 class="mb-0">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <ion-icon data-toggle="collapse" data-target="#collapseTen" aria-expanded="false"
                                        aria-controls="collapseTen" class="collapsed" name="remove-outline">
                                    </ion-icon>

                                    <ion-icon id="crossIcon3" name="close-outline"></ion-icon>
                                </div>
                            </div>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse show" aria-labelledby="headingTen"
                        data-parent="#accordion">
                        <div class="notesBox">
                            <ul class="nav nav-tabs detailanavtabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active LeadDeatilsTab" id="home-tab" data-toggle="tab"
                                        href="#home" role="tab" aria-controls="home" aria-selected="true">
                                        <img src="./images/info.png" width="14px" alt="" /> Lead
                                        Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link LeadDeatilsTab" id="profile-tab" data-toggle="tab"
                                        href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"><img src="./images/application.png" width="18px"
                                            alt="" />
                                        Application Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link LeadDeatilsTab" id="contact-tab" data-toggle="tab"
                                        href="#contact" role="tab" aria-controls="contact"
                                        aria-selected="false"><img src="./images/mail.png" width="18px"
                                            alt="" /> Email
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link LeadDeatilsTab" id="application-tab" data-toggle="tab"
                                        href="#application" role="tab" aria-controls="application"
                                        aria-selected="false"><img src="./images/application.png" width="18px"
                                            alt="" />
                                        Application Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link LeadDeatilsTab" id="sms-tab" data-toggle="tab"
                                        href="#sms" role="tab" aria-controls="sms" aria-selected="false">
                                        <img src="./images/typing.png" width="18px" alt="" /> Sms
                                    </a>
                                </li>
                                <div class="tabbtnBox">
                                    <li>
                                        <button class="addbtn">
                                            <a href="edit-contact.html">
                                                <ion-icon name="create-outline"></ion-icon>Edit
                                            </a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="addbtn">
                                            <ion-icon name="add"></ion-icon>
                                            <a href="add-contact.html"> Add</a>
                                        </button>
                                    </li>
                                </div>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active customeTab" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="mb-1 row">
                                        <label for="input1" class="col-sm-6 col-form-label">Dba</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="mb-0 row">
                                        <label for="input1" class="col-sm-6 col-form-label">What Type of Business Do
                                            you do?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="input1" class="col-sm-6 col-form-label">Wow and how long have
                                            you been in business for?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="input1" class="col-sm-6 col-form-label">Very Nice so whats your
                                            average monthly
                                            revenuenow</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="input1" class="col-sm-6 col-form-label">So tell me how much $
                                            are you looking for?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="input1" class="col-sm-6 col-form-label">Great and what are you
                                            looking to use the money
                                            fo</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="input1" class="col-sm-6 col-form-label">I can get U Funded Would
                                            you Like me to set it
                                            Up?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade customeTab" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="mb-1 row">
                                        <label for="input1" class="col-sm-6 col-form-label">Business Tax ID</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label for="input1" class="col-sm-6 col-form-label">Date of Birth</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="date" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Social Security
                                            Number</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">How's your
                                            Credit?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Any current Positions?
                                            being paid now by the way</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">(If has) Ohok how
                                            much&are you guys 50% paid
                                            in?$</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">(If Has) Ok Cool what
                                            are the balances on that?$</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Ok Cool what's your home
                                            address?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">City</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">State</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Zip</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Any additional Bank
                                            accounts or just one</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">MAKE SURE BUSINESS
                                            ADRESS ON THE LEAD IS LISTED</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Are you 100% Owner or do
                                            you have a partner</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">LLC OR Corp Or Sole
                                            prop</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Are the Funds not
                                            urgent? Or asap?</label>
                                        <div class="col-sm-6 alignend">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade customeTab" id="pills-profile1" role="tabpanel"
                                    aria-labelledby="pills-profile-tab1" tabindex="0">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Date & Time</th>
                                                    <th>User</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- <img src="./images/graymail.png" alt=""> -->
                                                        as
                                                    </td>
                                                    <td>09/23/2022 02:05 PM</td>
                                                    <td>John</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-envelope-square"></i>
                                                    </td>
                                                    <td>09/23/2022 01:05 PM</td>
                                                    <td>Steve</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-envelope-square"></i>
                                                    </td>
                                                    <td>09/22/2022 9:05 PM</td>
                                                    <td>Sarah</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fa fa-envelope-square"></i>
                                                    </td>
                                                    <td>09/21/2022 12:05 PM</td>
                                                    <td>Smith</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade customeTab" id="contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <div class="tablescrol">
                                        <table class="customeTable">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Date & Time</th>
                                                    <th>User</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="./images/graymail.png" class="enailpic"
                                                            alt="" />
                                                    </td>
                                                    <td>09/23/2022 02:05 PM</td>
                                                    <td>John</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./images/graymail.png" class="enailpic"
                                                            alt="" />
                                                    </td>
                                                    <td>09/23/2022 01:05 PM</td>
                                                    <td>Steve</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./images/graymail.png" class="enailpic"
                                                            alt="" />
                                                    </td>
                                                    <td>09/22/2022 9:05 PM</td>
                                                    <td>Sarah</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./images/graymail.png" class="enailpic"
                                                            alt="" />
                                                    </td>
                                                    <td>09/21/2022 12:05 PM</td>
                                                    <td>Smith</td>
                                                    <td>Hi! How are you?</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade customeTab" id="application" role="tabpanel"
                                    aria-labelledby="application-tab">
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Sold Funded
                                            Amount</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Upsell
                                            Percentage</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Upsell Amount</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Commission</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">PSF</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Total Sale
                                            Amount</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Revenue</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Previous Funded
                                            Amount</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">ID Number</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Cap</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <label for="input1" class="col-sm-6 col-form-label">Term</label>
                                        <div class="alignend col-sm-6">
                                            <input type="text" class="form-control customeinput" id="input1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade customeTab" id="sms" role="tabpanel"
                                    aria-labelledby="sms-tab">
                                    <div class="mt-3 text-center">
                                        <p class="text-bold">
                                            There is no SMS Message thread for this contact
                                        </p>
                                    </div>

                                    <div class="smsBox">
                                        <textarea name="" id=""></textarea>
                                        <div class="smsbtnBox">
                                            <button class="addbtn" title="" data-accessibility-tab="true"
                                                tabindex="0" data-accessibility-menu="true">
                                                <a href="./email-template.html" style="text-decoration: none">
                                                    Templates</a>
                                                <i></i>
                                            </button>
                                            <button class="cancel" onclick="sendSMSFromCallerPage()"
                                                data-accessibility-tab="true" tabindex="0">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div id="smsControls">
                                            <div id="divSmsPhoneNumber" style="display: none">
                                                <table>
                                                    <tbody>
                                                        <tr class="noTabindex">
                                                            <td id="lblSmsPhoneNumber">
                                                                <label for="ddlSmsPhoneNumber">Send From</label>
                                                            </td>
                                                            <td id="lblSmsPhoneNumberSelect">
                                                                <div id="ddlSmsPhoneNumber"></div>
                                                                <div id="noSmsPhoneNumberMessage">
                                                                    <p>No SMS Number Available</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mt-3 hidescriptBox" id="accordionExample">
                <div class="card collapsCard border-bottom">
                    <div class="card-header profileCollasp" id="headingtweleve">
                        <h5 class="mb-0">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <ion-icon data-toggle="collapse" data-target="#collapsetweleve"
                                        aria-expanded="false" aria-controls="collapsetweleve" class="collapsed"
                                        name="remove-outline"></ion-icon>
                                    <ion-icon id="crossIcon4" name="close-outline"></ion-icon>
                                    <!-- <i  class="fa-solid fa-xmark ml-2"></i> -->
                                </div>
                            </div>
                            <!-- <button class="btn btn-link collapsed">
                    Collapsible Group Item #3
                    
                  </button>
                   -->
                        </h5>
                    </div>
                    <div id="collapsetweleve" class="collapse show" aria-labelledby="headingtweleve"
                        data-parent="#accordion">
                        <div class="card-body collapsCardBody p-0">
                            <div class="secondBox">
                                <div class="notesHeader">
                                    <div class="notesHeaderIcon">
                                        <div class="createNotes">
                                            <i class="fa-solid fa-list"></i>
                                            <p class="text-bold">Script</p>
                                        </div>
                                    </div>
                                    <select class="selLead mx-3" name="" id="">
                                        <option value="0" data-color="#fff">Filter</option>
                                        <option value="698053" data-color="#F0F8FF">
                                            App/Bank
                                        </option>
                                        <option value="697931" data-color="#F0F8FF">
                                            Data Leads
                                        </option>
                                        <option value="697607" data-color="#F0F8FF">Dead</option>
                                        <option value="698013" data-color="#F0F8FF">
                                            Deal Sent
                                        </option>
                                        <option value="698015" data-color="#F0F8FF">
                                            Not Interested
                                        </option>
                                        <option value="698014" data-color="#F0F8FF">
                                            Qualified
                                        </option>
                                        <option value="698052" data-color="#F0F8FF">
                                            Sell Deal
                                        </option>
                                        <option value="697606" data-color="#F0F8FF">Sold</option>
                                        <option value="697930" data-color="#F0F8FF">
                                            Web Lead
                                        </option>
                                        <option value="697605" data-color="#F0F8FF">
                                            Working Lead
                                        </option>
                                    </select>
                                </div>
                                <div class="scriptBoz">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <select id="lstScript" class="selLead form-select">
                                                <option value="1323128">Date Script</option>
                                                <option value="1323132">Not Interested</option>
                                                <option value="1323134">
                                                    I need to think about it/Talk to mypartner
                                                </option>
                                                <option value="1323135">Sell the deal</option>
                                                <option value="1323137">
                                                    Whas the Rate or term orinterest
                                                </option>
                                                <option value="1323178">Interested</option>
                                                <option value="1334950">
                                                    I already Got Funded Im good
                                                </option>
                                                <option value="1334951">
                                                    I didnt get anything and dont want anymrore
                                                </option>
                                                <option value="1391837">Google Or web Lead</option>
                                                ,
                                                <option value="1391838">Inbound Lead Transfer</option>
                                                ,
                                                <option value="1406657">Why not weekly?</option>
                                                ,
                                                <option value="1406658">Why Not Monthly</option>
                                                ,
                                                <option value="1406666">Why is it Daily?</option>
                                                ,
                                                <option value="1406667">
                                                    2nd Position Why rate so High
                                                </option>
                                                <option value="1406668">
                                                    1st Position Why is the rate so High
                                                </option>
                                                <option value="1406669">
                                                    Call me back First Call
                                                </option>
                                                <option value="1406670">
                                                    Call me back Selling deal
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-12 offset-xl-2 col-lg-6 col-xl-5 mt-1">
                                            <div class="d-flex justify-content-end">
                                                <!-- <a href="" class="btn btn-success">Script Responses</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 letter">
                                        <p><span>Hi Frank?</span></p>
                                        <p>
                                            <span><span>
                                                    <span><br />Hi this is Rob calling from FundinguCapital
                                                        How are you today?</span><br /><br /><br />
                                                    <span>I wanted to reach out because I saw you May have
                                                        been interested in funding in the past For your
                                                        Business We work with the Top rated&nbsp;<br /><br /></span>Can
                                                    any additional capital be
                                                    beneficial?<br /></span><span><br /></span>
                                                <span style="background-color: #ffff00">The reason I ask is because
                                                    right now lenders are
                                                    being a lot more flexible because of the economy and
                                                    interest rates.</span><br />
                                                <span><br /><br /></span><span>
                                                    <span>Let me ask you a couple of quick questions so I
                                                        don't waste your time</span>.<br /><br /><br /></span></span>
                                        </p>
                                    </div>
                                    <hr />
                                    <div class="mt-1">
                                        <button class="btn-tag">Not Interested</button>
                                        <button class="btn-tag">
                                            Need to think about it/Talk to Partner
                                        </button>
                                        <button class="btn-tag">
                                            Whats the rate term or interest
                                        </button>
                                        <button class="btn-tag">Interested</button>
                                        <button class="btn-tag">
                                            I Already got funded Im good
                                        </button>
                                        <button class="btn-tag">
                                            I didn't Get anything & don't want
                                        </button>
                                        <button class="btn-tag">
                                            I didnt get approved & Dont think will
                                        </button>
                                        <button class="btn-tag">
                                            Rates are too high I dont want
                                        </button>
                                        <button class="btn-tag">Googe or web lead</button>
                                        <button class="btn-tag">Inbound Lead Transfer</button>
                                        <button class="btn-tag">Why Not weekly?</button>
                                        <button class="btn-tag">Why Not Monthly</button>
                                        <button class="btn-tag">Why Is it Daily</button>
                                        <button class="btn-tag">
                                            2nd Position Why rate so High
                                        </button>
                                        <button class="btn-tag">Call me back first call</button>
                                        <button class="btn-tag">Call me back selling deal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="activityBox">
                <div class="accordion">
                    <div class="card collapsCard">
                        <div class="card-heade collapsCadHeaderr" id="headingTwo">
                            <h5 class="mb-0">
                                <div class="d-flex justify-content-between">
                                    <!-- <button class="btn  collapsed" > -->
                                    <p class="bold-text">Activity</p>
                                    <div>
                                        <div class="mt-1">
                                            <select class="selLead mx-2 my-2" name="" id="">
                                                <option value="">All Activity</option>
                                            </select>
                                            <select class="selLead" name="" id="">
                                                <option value="">All Types</option>
                                            </select>
                                            <ion-icon name="remove-outline" class="collapsed mr-1"
                                                data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo "></ion-icon>
                                            <ion-icon id="crossIcon5" name="close-outline"></ion-icon>
                                        </div>
                                    </div>
                                </div>

                                <!-- </button> -->
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse collapsCardBody show" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body px-sm-5 px-0 py-0">
                                <div class="">
                                    <div class="activityBoxscroll">
                                        <div class="timelineBox">
                                            <div class="orangeBox">
                                                <!-- <i class="fa-solid fa-pencil"></i> -->
                                                <img src="./images/edit.png" width="18px" alt="" />
                                            </div>
                                            <div class="loaderBox">
                                                <!-- <i class="fa-solid fa-rotate"></i> -->
                                                <img src="./images/sync.png" alt="" />
                                            </div>
                                            <div class="userBox">
                                                <!-- <i class="fa-regular fa-user-plus"></i> -->
                                                <ion-icon name="person-add-outline" style="color: #fff"></ion-icon>
                                            </div>
                                            <div class="startBox">
                                                <div class="purpleCircleBox">
                                                    <div class="pinkCircle">
                                                        <!-- <i class="fa-solid fa-border-all"></i> -->
                                                        <ion-icon name="grid-outline"></ion-icon>
                                                    </div>
                                                    <div>
                                                        <h6>ISA LISA</h6>
                                                        <p>Aug 9</p>
                                                    </div>
                                                </div>

                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="unable">
                                                <p>Unable to connect</p>
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </div>
                                            <div class="assignendTeext">
                                                <h6>
                                                    Assigned to <span class="bold"> ISA LISA </span> by
                                                    <span class="bold"> iftikhar A </span>
                                                </h6>
                                                <p>july 25</p>
                                            </div>
                                            <div class="assignendTeext">
                                                <h6>
                                                    <span class="bold"> Christopher Short </span> added
                                                    by
                                                    <span class="bold"> iftikhar A (import) </span>
                                                </h6>
                                                <p>july 25</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seconddiv">
            <div class="tasksScrollableBox">
                <div class="accordion" id="accordionExample2">
                    <div class="card collapsCard border-bottom">
                        <div class="card-header profileCollasp" id="headingthirteen">
                            <h5 class="mb-0">
                                <div class="d-flex justify-content-end border-bottom">
                                    <div>
                                        <ion-icon data-toggle="collapse" data-target="#collapsethirteen"
                                            aria-expanded="false" aria-controls="collapsethirteen" class="collapsed"
                                            name="remove-outline"></ion-icon>
                                        <ion-icon id="crossIcon6" name="close-outline"></ion-icon>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-link collapsed">
                    Collapsible Group Item #3
                    
                  </button>
                   -->
                            </h5>
                        </div>
                        <div id="collapsethirteen" class="collapse show" aria-labelledby="headingthirteen"
                            data-parent="#accordion">
                            <div class="card-body p-0">
                                <div id="accordion">
                                    <div class="card collapsCard border-bottom">
                                        <div class="card-header collapsCadHeader p-3" id="headingtask">
                                            <h5 class="mb-0">
                                                <div class="taskalgn">
                                                    <div class="task">
                                                        <!-- <i class="fa-solid fa-list"></i> -->
                                                        <ion-icon name="list-outline"></ion-icon>
                                                        <p>Tasks</p>
                                                    </div>
                                                    <div class="task">
                                                        <div class="bluecircle" data-toggle="modal"
                                                            data-target="#exampleModalCenter5">
                                                            <!-- <i class="fa-solid fa-plus"></i> -->
                                                            <ion-icon name="add"></ion-icon>
                                                        </div>
                                                        <div class="bluecircle">
                                                            <!-- <i class="fa fa-bolt fa-fw fa-2x"></i> -->
                                                            <img src="./images/energywhite.png" style="width: 14px"
                                                                alt="" />
                                                        </div>
                                                        <!-- <i class="fa-solid fa-angle-up"></i> -->
                                                        <ion-icon name="chevron-up-outline" class="collapsed"
                                                            data-toggle="collapse" data-target="#collapsetask"
                                                            aria-expanded="false" aria-controls="collapsetask">
                                                        </ion-icon>
                                                    </div>
                                                </div>

                                                <!-- <button class="btn btn-link collapsed">
                            Collapsible Group Item #3
                            
                          </button>
                           -->
                                            </h5>
                                        </div>
                                        <div id="collapsetask" class="collapse show" aria-labelledby="headingtask"
                                            data-parent="#accordion">
                                            <div class="card-body collapsCardBody">
                                                <p class="text">No upcoming tasks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card collapsCard border-bottom">
                                        <div class="card-header collapsCadHeader" id="headingFive">
                                            <h5 class="mb-0">
                                                <div class="taskalgn">
                                                    <div class="task">
                                                        <!-- <i class="fa-regular fa-calendar-days"></i> -->
                                                        <ion-icon name="calendar-outline"></ion-icon>

                                                        <p>Appointements</p>
                                                    </div>
                                                    <div class="task">
                                                        <div class="bluecircle" data-toggle="modal"
                                                            data-target="#exampleModalCenter7">
                                                            <!-- <i class="fa-solid fa-plus"></i> -->
                                                            <ion-icon name="add"></ion-icon>
                                                        </div>
                                                        <div class="bluecircle">
                                                            <img src="./images/energywhite.png" style="width: 14px"
                                                                alt="" />
                                                        </div>
                                                        <!-- <i class="fa-solid fa-angle-up"></i> -->
                                                        <ion-icon name="chevron-up-outline" class="collapsed"
                                                            data-toggle="collapse" data-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                        </ion-icon>
                                                    </div>
                                                </div>

                                                <!-- <button class="btn btn-link collapsed">
                            Collapsible Group Item #3
                            
                          </button>
                           -->
                                            </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive"
                                            data-parent="#accordion">
                                            <div class="card-body collapsCardBody">
                                                <p class="text">No upcoming Appointements</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card collapsCard border-bottom">
                                        <div class="card-header collapsCadHeader" id="headingSix">
                                            <h5 class="mb-0">
                                                <div class="taskalgn">
                                                    <div class="task">
                                                        <!-- <i class="fa-solid fa-paperclip"></i> -->
                                                        <ion-icon name="link-outline"></ion-icon>

                                                        <p>file</p>
                                                    </div>
                                                    <div class="task">
                                                        <label for="fileupload">
                                                            <input type="file" hidden name=""
                                                                id="fileupload" />
                                                            <div class="bluecircle">
                                                                <!-- <i class="fa-solid fa-plus"></i> -->
                                                                <ion-icon name="add"></ion-icon>
                                                            </div>
                                                        </label>
                                                        <!-- <i class="fa-solid fa-angle-up"></i> -->
                                                        <ion-icon name="chevron-up-outline" class="collapsed"
                                                            data-toggle="collapse" data-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">
                                                        </ion-icon>
                                                    </div>
                                                </div>

                                                <!-- <button class="btn btn-link collapsed">
                            Collapsible Group Item #3
                            
                          </button>
                           -->
                                            </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix"
                                            data-parent="#accordion">
                                            <div class="card-body collapsCardBody">
                                                <p class="text">No Files yet, drag some here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dealBoxScrollable">
                <div class="accordion" id="accordionExample">
                    <div class="card collapsCard border-bottom">
                        <div class="card-header profileCollasp" id="headingfourteen">
                            <h5 class="mb-0">
                                <div class="d-flex justify-content-end border-bottom">
                                    <div>
                                        <ion-icon class="collapsed" data-toggle="collapse"
                                            data-target="#collapsefourteen" aria-expanded="false"
                                            aria-controls="collapsefourteen" name="chevron-up-outline"></ion-icon>

                                        <ion-icon id="crossIcon7" name="close-outline"></ion-icon>
                                    </div>
                                </div>
                            </h5>
                        </div>
                        <div id="collapsefourteen" class="collapse show" aria-labelledby="headingfourteen"
                            data-parent="#accordion">
                            <div class="card-body p-0">
                                <div id="accordion">
                                    <div class="card collapsCard border-bottom daalBox">
                                        <div class="card-header collapsCadHeader" id="headingEight">
                                            <h5 class="mb-0">
                                                <div class="taskalgn">
                                                    <div class="task">
                                                        <!-- <i class="fa-solid fa-sack-dollar"></i> -->
                                                        <img src="./images/deal (1).png" alt="" />
                                                        <p><a href="deal_.html"> Deals </a></p>
                                                    </div>
                                                    <div class="task">
                                                        <div class="bluecircle" data-toggle="modal"
                                                            data-target="#exampleModalCenter4">
                                                            <!-- <i class="fa-solid fa-plus"></i> -->
                                                            <ion-icon name="add"></ion-icon>
                                                        </div>

                                                        <!-- <i class="fa-solid fa-angle-up"></i> -->
                                                        <ion-icon data-toggle="collapse" data-target="#collapseEight"
                                                            aria-expanded="false" aria-controls="collapseEight"
                                                            class="collapsed" name="chevron-up-outline"></ion-icon>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseEight" class="collapse show" aria-labelledby="headingEight"
                                            data-parent="#accordion">
                                            <div class="card-body collapsCardBody">
                                                <p class="text">No Deal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card collapsCard border-bottom">
                                        <div class="card-header collapsCadHeader" id="headingSeveen">
                                            <h5 class="mb-0">
                                                <div class="taskalgn">
                                                    <div class="task">
                                                        <img src="./images/cursor.png" alt="" />
                                                        <p>Activity</p>
                                                    </div>
                                                    <div class="task">
                                                        <div class="bluecircle" data-toggle="modal"
                                                            data-target="#exampleModalCenter8">
                                                            <!-- <i class="fa-solid fa-plus"></i> -->
                                                            <ion-icon name="add"></ion-icon>
                                                        </div>

                                                        <!-- <i class="fa-solid fa-angle-up"></i> -->
                                                        <ion-icon name="chevron-up-outline" class="collapsed"
                                                            data-toggle="collapse" data-target="#collapseSeveen"
                                                            aria-expanded="false" aria-controls="collapseSeveen">
                                                        </ion-icon>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseSeveen" class="collapse show"
                                            aria-labelledby="headingSeveen" data-parent="#accordion">
                                            <div class="card-body collapsCardBody">
                                                <p class="text">No Activity</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion mt-2 emptyBox" id="accordionExample">
                <div class="card collapsCard border-bottom">
                    <div class="card-header profileCollasp" id="headingsixteen">
                        <h5 class="mb-0">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <ion-icon class="collapsed" data-toggle="collapse" data-target="#collapsesixteen"
                                        aria-expanded="false" aria-controls="collapsesixteen"
                                        name="chevron-up-outline"></ion-icon>
                                    <ion-icon id="crossIcon8" name="close-outline"></ion-icon>
                                </div>
                            </div>
                            <!-- <button class="btn btn-link collapsed">
                  Collapsible Group Item #3
                  
                </button>
                 -->
                        </h5>
                    </div>
                    <div id="collapsesixteen" class="collapse show" aria-labelledby="headingsixteen"
                        data-parent="#accordion">
                        <div class="card-body collapsCardBody">
                            <div class="thirdBox"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///MODAL -->

    <!-- ////Edit number MOdal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Edit Phone
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Number" />
                        </div>
                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Email -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <i class="fa-regular fa-envelope mr-1"></i>

                        Edit Email
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Email" />
                        </div>
                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Address -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <i class="fa-regular fa-envelope mr-1"></i>

                        Edit Addess
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control Addresinput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="City" />
                            <input type="email" class="form-control homwinput" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Enter Email" />
                        </div>
                        <div
                            class="form-group d-flex justify-content-between addressmodalContainer flex-wrap flex-md-nowrap">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="State" />
                            <input type="email" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Zip code" />
                            <input type="email" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="United State" />
                            <!-- <select class="selectpicker">
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Australia</option>
                  <option>Afghanistan</option>
                  <option>Albania</option>
                  <option>Algeria</option>S
                </select> -->
                            <select class="selLead" id="exampleFormControlSelect1">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Save Address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEal -->
    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Add Deals
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Add Name" />
                        </div>

                        <div
                            class="form-group d-flex justify-content-between addressmodalContainer flex-md-nowrap flex-wrap">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Price" />

                            <input type="email" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Zip code" />
                            <input type="date" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Commession" />
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Search People" />
                            <input type="email" class="form-control ml-3" id="exampleInputEmail1 "
                                aria-describedby="emailHelp " placeholder="Search Team" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control " id="exampleInputEmail1 "
                            aria-describedby="emailHelp " placeholder="Add Decsription" />
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create TAsk -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Create Task
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Task Name" />
                        </div>

                        <div class="form-group d-flex justify-content-between tasksel">
                            <select name="follow Up" class="form-control selectpsacing selLead w-100"
                                id="exampleFormControlSelect1 ">
                                <option selected value="follow Up">follow Up</option>
                                <option value="Call">Call</option>
                                <option value="Email">Email</option>
                                <option value="Showing">Showing</option>
                                <option value="Closing">Closing</option>
                                <option value="Opne House">Opne House</option>
                                <option value="Thank You">Thank You</option>
                            </select>
                            <select class="selLead w-100" id="exampleFormControlSelect2  ">
                                <option selected>demo</option>
                            </select>
                        </div>
                        <div class="form-group d-flex justify-content-between flex-sm-nowrap flex-wrap">
                            <input type="date" class="form-control selectpsacing mobsel"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price" />

                            <input type="time" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Zip code" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Create Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///Edit User Nmae -->
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Edit User Name
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between flex-sm-nowrap flex-wrap">
                            <input type="email" class="form-control selectpsacing mobsel"
                                id="exampleFormControlInput1" placeholder="Task Name" />
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Task Name" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Edit UserName</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add oppoiment -->
    <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Create Appointment
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Tittle" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Description" />
                        </div>
                        <div class="form-group d-flex justify-content-between tasksel">
                            <select name="follow Up" class="form-control selLead w-100 selectpsacing"
                                id="exampleFormControlSelect1 ">
                                <option selected value="follow Up">Listing</option>
                                <option value="No type">No type</option>
                                <option value="Buyer Consultation">Buyer Consultation</option>
                            </select>
                            <select class="selLead w-100" id="exampleFormControlSelect2  ">
                                <option selected>No outCome</option>
                                <option value="No Show">No Show</option>
                                <option value="Working with buyer">Working with buyer</option>
                                <option value="Working with buyer">Working with buyer</option>
                                <option value="Listing obtained">Listing obtained</option>
                            </select>
                        </div>
                        <div
                            class="form-group d-flex justify-content-between appointment mt-3 flex-lg-nowrap flex-wrap">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Price" />

                            <input type="date" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Zip code" />
                            <input type="date" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Commession" />
                            <input type="time" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Commession" />
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <input type="text" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Location" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Create Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Activity Modal -->
    <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Activity
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group activitymodalBody">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Activity Type" />
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Activity Name" />
                            <input type="time" class="form-control" id="exampleFormControlInput1"
                                placeholder="First Name" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action plays -->
    <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Action Plans
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <select class="selLead" id="exampleFormControlSelect4  ">
                                <option value="Assign to a lender" selected>
                                    Assign to a lender
                                </option>
                                <option value="Birthday Email on Day of Birthday">
                                    Birthday Email on Day of Birthday
                                </option>
                                <option value="INITIAL CONTACT">INITIAL CONTACT</option>
                                <option value="New Inquiry for an existing lead
              ">
                                    New Inquiry for an existing lead
                                </option>
                                <option value="Past client saved a home">
                                    Past client saved a home
                                </option>
                                <option value="SYSTEM">SYSTEM</option>
                                <option value="Unconverted and active now. Call!
                  ">
                                    Unconverted and active now. Call!
                                </option>
                                <option value="Wrong Number
                  ">
                                    Wrong Number
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Action Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Relatio -->
    <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>
                        Update Relation
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="First Name" />
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Last Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Type e g.spouse" />
                        </div>
                        <div
                            class="form-group d-flex justify-content-lg-between justify-content-around flex-lg-nowrap flex-wrap">
                            <div class="form-group phoneinput">
                                <label for="exampleInputPasswordphoneNumber">
                                    Phone Number</label>
                                <input type="number" class="form-control" id="exampleInputPasswordphoneNumber"
                                    placeholder="555-555-555" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Label</label>
                                <select class="selLead" id="exampleFormControlSelect1">
                                    <option selected value="follow Up">Mobile</option>
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Spouce">Spouce</option>
                                    <option value="Flax">Flax</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="FLEX justify-content-center text-center">
                                <h5 class="h5">Bad Number</h5>

                                <input type="checkbox" class="form-check-input text-center" id="exampleCheck1" />
                            </div>
                            <div class="FLEX justify-content-center text-center">
                                <h5 class="h5">Remove</h5>

                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-between dealinpit">
                            <input type="email" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="example@gmail.com" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Create Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///Edit Update Stage -->
    <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Stage
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="Lead" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Stage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///Update Source -->
    <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Source
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="Update Source" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Source</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///Update Agent-->
    <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Agent
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="Update Agent" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Agent</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///Update Price-->
    <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Price
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="Update Price" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Price</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///Update Tag-->
    <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Tag
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <select class="selectpicker" multiple>
                            <option>Bad Number</option>
                            <option>Wrong Number</option>
                            <option>Purchase Leads-VA Loans</option>
                            <option>Purchase Leads-OR</option>
                            <option>Pennlvania Home Deals</option>
                            <option>Open House Atteddee</option>
                            <option>FinanceUSA Leads Internal VA</option>
                            <option>William Coalson</option>
                            <option>William</option>
                            <option>Virginial Home Deals</option>
                            <option>Victor Zsasz</option>
                            <option>Unsubscribed</option>
                            <option>Re-engage</option>
                        </select>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Tag</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///Update Background-->
    <div class="modal fade" id="exampleModalCenter16" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Update Background
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" class="form-control selectpsacing" id="exampleFormControlInput1"
                                placeholder="Update Background" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Update Background</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"
        integrity="sha512-Eezs+g9Lq4TCCq0wae01s9PuNWzHYoCMkE97e2qdkYthpI0pzC3UGB03lgEHn2XM85hDOUF6qgqqszs+iXU4UA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./src/js/core/dashboard.js"></script>

    <script src="./src/js/core/Header.js"></script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
