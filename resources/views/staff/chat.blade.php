<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat</title>
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>

    <sidebar-element></sidebar-element>

    <div id="header"></div>

    <div class="chatContainer">
        <div class="inboxContainer">
            <div class="myinbox">
                <div class="green"></div>
                <p class="text-bold">My inbox</p>
                <p>(162)</p>
            </div>

            <div class="inbox active1">
                <img src="{{ asset('images/graymail.png') }}" alt="">
                <h6>Inbox</h6>
            </div>

            <div class="inbox">

                <ion-icon name="person-outline"></ion-icon>
                <h6>Assigned</h6>
            </div>
            <div class="inbox">

                <ion-icon name="document-outline"></ion-icon>
                <h6>Drafts</h6>
            </div>
            <div class="inbox">
                <ion-icon name="download-outline"></ion-icon>
                <h6>Cloased</h6>
            </div>
        </div>
        <div class="conversationBox">
            <div class="seldconversatio">
                <p>Select Conversation</p>

                <div class="dropdown">
                    <button class="selLead dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

            <div class="selectMasageBox chatactive">
                <div>
                    <h5 class="h5">David Washing <span class="smalltext">(6)</span></h5>
                    <p class="p1 spacetop">
                        <ion-icon name="call-outline"></ion-icon> Missed Call
                    </p>
                    <p class="smalltext">No Voicemail</p>
                </div>
                <div>
                    <p class="smalltext">2:99 am</p>
                </div>
            </div>
            <div class="selectMasageBox">
                <div>
                    <h5 class="h5">David Washing <span class="smalltext">(6)</span></h5>
                    <p class="p1 spacetop">
                        <ion-icon name="chatbubble-ellipses-outline" class="Blue"></ion-icon> (122)121-1212
                    </p>
                    <p class="smalltext">Sorry i can't talk now</p>
                </div>
                <div>
                    <p class="smalltext">2:99 am</p>
                </div>
            </div>
            <div class="selectMasageBox">
                <div>
                    <h5 class="h5">David Washing <span class="smalltext">(6)</span></h5>
                    <p class="p1 spacetop">
                        <ion-icon name="chatbubble-ellipses-outline" class="Blue"></ion-icon> (122)121-1212
                    </p>
                    <p class="smalltext">Sorry i can't talk now</p>
                </div>
                <div>
                    <p class="smalltext">2:99 am</p>
                </div>
            </div>
        </div>

        <div class="chatBox">
            <div class="chatheader">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/greentelephone.png') }}" class="mr-3 greenPhone" alt="">
                    <div>
                        <p class="h4 Blue">David Washington</p>
                        <p class="smalltext">(202)455-3434</p>
                    </div>
                </div>

                <div class="rightheaderICon">
                    <div class="msgCal">
                        <div class="iconBox">
                            <ion-icon name="chatbubble"></ion-icon>
                        </div>
                        <div class="iconBox bg-blue">
                            <ion-icon name="call"></ion-icon>
                        </div>
                    </div>

                    <div class="roundBox">
                        <div class="d-flex p-2">
                            <div class="iconBox bg-pink">LI</div>

                            <div class="me">
                                <p class="smalltext"></p>
                                Me <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="leftroghtnprder">
                            <p class="smalltext2">Close</p>
                        </div>
                        <div class="elips">
                            <ion-icon name="ellipsis-vertical"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chatBody">
                <div class="scrollmasgBox">
                    <div class="msgBox">
                        <div class="msg1">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/greentelephone.png') }}" class="mr-3 greenPhone"
                                    alt="">
                                <div>
                                    <h4 class="h2">David Washington</h4>
                                    <p class="smalltext">Aug 2,4:33 am(00:15)</p>
                                </div>
                            </div>
                            <div class="msgIconBox">
                                <img src="{{ asset('images/grayedit.png') }}" class="chattedit" alt="">
                                <ion-icon name="wifi-outline" class="wifiIcon"></ion-icon>
                                <!-- <i class="fa-regular fa-download"></i> -->
                                <ion-icon name="download-outline"></ion-icon>
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="msg1">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/greentelephone.png') }}" class="mr-3 greenPhone"
                                    alt="">
                                <div>
                                    <h4 class="h2">David Washington</h4>
                                    <p class="smalltext">Aug 2,4:33 am(00:15)</p>
                                </div>
                            </div>
                            <div class="msgIconBox">
                                <img src="{{ asset('images/grayedit.png') }}" class="chattedit" alt="">
                                <ion-icon name="wifi-outline" class="wifiIcon"></ion-icon>
                                <!-- <i class="fa-regular fa-download"></i> -->
                                <ion-icon name="download-outline"></ion-icon>
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="msgKeyboard">
                    <input type="text" placeholder="Write a note" name="" id="" />
                    <button class="addbtn">Create Note</button>
                </div>
            </div>
        </div>

        <div class="profileBox">
            <div class="profileContaier">
                <div class="profile">
                    <h3 class="h5">CS</h3>
                </div>
                <div>
                    <h5 class="text-bold h5">Christopher Short</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <div class="contactdetailBox">
                <div class="conactdetail">
                    <!-- <i class="fa-solid fa-phone"></i> -->
                    <img src="{{ asset('images/telephone.png') }}" width="14px" alt="">
                    <p class="Blue">(232)121-23234</p>
                    <span class="smalltext">(mobile)</span>
                    <div class="smallICpnbox">
                        <!-- <i class="fa-solid fa-phone"></i> -->
                        <ion-icon name="call-sharp"></ion-icon>
                    </div>
                    <div class="smallICpnbox bg-blue">
                        <ion-icon name="chatbubble"></ion-icon>
                    </div>
                </div>
                <div class="conactdetail">
                    <!-- <i class="fa-regular fa-envelope"></i> -->
                    <img src="{{ asset('images/email.png') }}" width="13px" alt="">
                    <p>Add Email</p>
                </div>
            </div>
            <div id="accordion">
                <div class="card collapsCard">
                    <div class="card-header collapsCadHeader" id="headingThree">
                        <h5 class="mb-0">
                            <div class="detail">
                                <div>
                                    <!-- <i class="fa-solid fa-list"></i> -->
                                    <ion-icon name="list-outline"></ion-icon>
                                    <p class="p1">Details</p>
                                </div>
                                <div>

                                    <ion-icon data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" class="collapsed" aria-controls="collapseThree"
                                        name="chevron-down-outline"></ion-icon>
                                </div>
                            </div>
                            <!-- <button class="btn btn-link collapsed">
                    Collapsible Group Item #3
                    
                  </button>
                   -->
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                        data-parent="#accordion">
                        <div class="card-body collapsCardBody">
                            <div class="detailsBox">
                                <div class="liBox">
                                    <p><span>Stage </span>Nature</p>
                                    <p><span>Agent </span>ISA LISA</p>
                                    <p><span>Lender</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card collapsCard border-bottom">
                <div class="card-header collapsCadHeader" id="headingSeveen">
                    <h5 class="mb-0">
                        <div class="taskalgn collapsed" data-toggle="collapse" data-target="#collapseSeveen"
                            aria-expanded="false" aria-controls="collapseSeveen">
                            <div class="task">

                                <ion-icon name="people-outline"></ion-icon>
                                <p class="p1">Relationships</p>
                            </div>
                            <div class=" task ">
                                <div data-toggle="modal" data-target="#exampleModalCenter10" class="bluecircle">

                                    <i class="fa-solid fa-plus"></i>
                                </div>

                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                    </h5>
                </div>
                <div id="collapseSeveen" class="collapse show" aria-labelledby="headingSeveen"
                    data-parent="#accordion">
                    <div class="card-body collapsCardBody">
                        <p class="text">No Realtion</p>
                    </div>
                </div>
            </div>
            <div class="card collapsCard border-bottom">
                <div class="card-header collapsCadHeader" id="headingfiv">
                    <h5 class="mb-0">
                        <div class="taskalgn collapsed" data-toggle="collapse" data-target="#collapsefiv"
                            aria-expanded="false" aria-controls="collapsefiv">
                            <div class="task">
                                <!-- <i class="fa-regular fa-comments"></i> -->
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                                <p class="p1">Recent Conversations</p>
                            </div>
                            <div class="task">
                                <div class="bluecircle">
                                    <i class="fa-solid fa-plus"></i>
                                </div>

                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                    </h5>
                </div>
                <div id="collapsefiv" class="collapse show" aria-labelledby="headingfiv" data-parent="#accordion">
                    <div class="card-body collapsCardBody d-flex align-items-center">
                        <p class="ml-5 mt-2 Blue">
                            <i class="fa-solid fa-phone mr-2"></i> Missed Call
                        </p>
                    </div>
                </div>
            </div>
            <div class="card collapsCard border-bottom">
                <div class="card-header collapsCadHeader" id="headingsix">
                    <h5 class="mb-0">
                        <div class="taskalgn collapsed" data-toggle="collapse" data-target="#collapsesix"
                            aria-expanded="false" aria-controls="collapsesix">
                            <div class="task">
                                <!-- <i class="fa-solid fa-arrow-pointer"></i> -->
                                <img src="{{ asset('images/cursor.png') }}" class="cursorPic" alt="">
                                <p class="p1">Activity</p>
                            </div>
                            <div class="task">
                                <div class="bluecircle" data-toggle="modal" data-target="#exampleModalCenter8">
                                    <i class="fa-solid fa-plus"></i>
                                </div>

                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </div>
                        </div>
                    </h5>
                </div>
                <div id="collapsesix" class="collapse show" aria-labelledby="headingsix" data-parent="#accordion">
                    <div class="card-body collapsCardBody d-flex align-items-center">
                        <p>No Activuty</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <select class="selLead" id="exampleFormControlSelect4  ">
                                <option selected>Activity Name</option>
                                <option value="No Show">SaadFarooq</option>
                                <option value="Working with buyer">Adnan khan</option>
                                <option value="Working with buyer">Working with buyer</option>
                                <option value="Listing obtained">Bilal Hamed</option>
                            </select>
                            <select class="selLead" id="exampleFormControlSelect4  ">
                                <option selected>Activity Type</option>
                                <option value="No Show">SaadFarooq</option>
                                <option value="Working with buyer">Adnan khan</option>
                                <option value="Working with buyer">Working with buyer</option>
                                <option value="Listing obtained">Bilal Hamed</option>
                            </select>
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
    <!-- relatio -->
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
                        <button class="addbtn">Update Relation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="{{ asset('src/js/core/Header.js') }}"></script>
<script
  type="module"
  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
