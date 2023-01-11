<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>Calendar - CRM</title>
    <!-- ///Custome css -->
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}" />
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}" />
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/calendar/main.css') }}" />
    <script src="{{ asset('assets/calendar/main.js') }}"></script>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: "dayGridMonth",
            editable: true,
            selectable: true,


        });
        calendar.render();
    });
</script>

<body>
    <div id="header"></div>
    <!-- //headerSide -->
    <sidebar-element></sidebar-element>
    <!-- //blue side bat -->

    <sidebar2-element></sidebar2-element>

    <div class="app-content">
        <div class="">
            <div class="content-body">
                <div class="row m-0">
                    <div class="col-lg-12 padingzero">
                        <div class="">
                            <div class="card-content collapse show">
                                <div class="top-bar marginzero">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <h3 class="text-bold">Calender</h3>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <select class="selLead w-100" id="exampleFormControlSelect1  ">
                                                <option value="Filter">Filter</option>
                                                <option value="Filter">Tasks</option>
                                                <option value="Appointement">Appointement</option>
                                                <option value="Appointement">Closing</option>
                                            </select>


                                        </div>
                                    </div>
                                </div>

                                <div class="calenderBox round-box">
                                    <div class="row m-0 p-0">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                                        <div class="col-xl-2 col-lg-12 p-0">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="taskTab active" id="nav-home-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                                                        role="tab" aria-controls="nav-home" aria-selected="true">
                                                        Tasks
                                                    </button>
                                                    <button class="taskTab" id="nav-profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-profile" type="button" role="tab"
                                                        aria-controls="nav-profile" aria-selected="false">
                                                        Appointements
                                                    </button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <div class="dateBox">
                                                        <h4>{{ date('D m, Y', strtotime(now())) }}</h4>
                                                    </div>

                                                    <div class="taskBosy">
                                                        <p>No Tasks Today</p>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    <div class="dateBox">
                                                        <h4>{{ date('D m, Y', strtotime(now())) }}</h4>
                                                    </div>

                                                    <div class="taskBosy">
                                                        <p>No Appointement Today</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-12 p-0 leftBorder">
                                            <button class="addbtn mt-3 mobbtn" data-toggle="modal"
                                                data-target="#exampleModalCenter5">
                                                <i class="fa-solid fa-plus"></i> Add Appointement
                                            </button>
                                            <div id="calendar" class="customecalender p-2">
                                                <button class="addbtn mt-3 clbtn" data-toggle="modal"
                                                    data-target="#exampleModalCenter5">
                                                    <i class="fa-solid fa-plus"></i> Add Appointement
                                                </button>
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalqw" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h5 class="modal-title justify-content-center" id="exampleModalLabel">
                            Edit
                        </h5>
                    </div>
                    <button class="btn" data-bs-dismiss="modal">
                        <i class="fas fa-times-circle"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <form>
                                        <div class="form-group row">
                                            <label style="margin-top: 5px !important" class="col-md-3 label-control"
                                                for="timesheetinput3">Add Date</label>
                                            <div class="col-md-9">
                                                <div class="position-relative">
                                                    <input type="date" id="timesheetinput3" class="form-control"
                                                        name="date" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="mt-1">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">
                                                    Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Create appoinment -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>
                        Create Appointement
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/add-appointment') }}" method="post">
                        @csrf

                        <div class="">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>

                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Title" name="title" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Decsription</label>

                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group d-flex">
                                <div class="w-100 selectpsacing">
                                    <label for="exampleFormControlSelect2">Type</label>

                                    <select name="type" class="selLead w-100" id="exampleFormControlSelect2 ">
                                        <option selected value="">No Type</option>
                                        <option value="Call">Call</option>
                                        <option value="Email">Email</option>
                                        <option value="Showing">Showing</option>
                                        <option value="Closing">Closing</option>
                                        <option value="Opne House">Opne House</option>
                                        <option value="Thank You">Thank You</option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <label for="exampleFormControlSelect1">Outcome</label>

                                    <select class="selLead w-100" name="outcome" id="exampleFormControlSelect1  ">
                                        <option selected>No Outcome</option>
                                        <option>No Show</option>
                                        <option>Working With Buyers</option>
                                        <option>Listing obtained</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="form-group d-flex justify-content-between appointment mt-3 flex-lg-nowrap flex-wrap align-items-center">
                                <input type="time" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="time_from" placeholder="Price" />

                                <input type="date" class="form-control" id="exampleInputEmail1 "
                                    aria-describedby="emailHelp" name="date_from" />
                                <p class="mr-1 gray">to</p>
                                <input type="date" class="form-control" id="exampleInputEmail1 "
                                    aria-describedby="emailHelp" name="date_to" placeholder="Commession" />
                                <input type="time" class="form-control" id="exampleInputEmail1 "
                                    aria-describedby="emailHelp" name="time_to" placeholder="Commession" />
                            </div>
                            <div class="customeCheckBox">
                                <input type="checkbox" name="all_day" value="1" class=""
                                    id="exampleCheck1" />
                                <label class="" for="exampleCheck1">All Day</label>
                            </div>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlInput1">Location</label>

                                <input type="text" name="location" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Loaction" />
                            </div>

                            <div>
                                <p>Invites</p>

                                <div class="badgeBox">
                                    <div class="badge">
                                        <div class="grayplus">LI</div>
                                        <p>ISA LISA</p>
                                        <i class="fa-solid fa-xmark"></i>
                                    </div>
                                    <div class="badge badge2">
                                        <i class="fa-solid fa-plus"></i>
                                        <p>Add Invite</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modalbtnContainer">
                            <button class="btn btn bg-transparent" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="addbtn" type="submit">Create Appointement</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="{{ asset('src/js/core/Header.js') }}"></script>
    <script src="{{ asset('src/js/core/sidebar.js') }}"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

</html>
