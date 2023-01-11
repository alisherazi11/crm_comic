<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <link rel="stylesheet" href="./assets/dateTable/jquery.dataTables.min.css" />
    <title>Dashboard - CRM</title>
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}" />
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/calendars/clndr.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.min.css') }}" />
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="header"></div>
    <!-- //headerSide -->
    <sidebar-element></sidebar-element>
    <!-- //blue side bat -->

    <sidebar2-element></sidebar2-element>

    <div class="app-content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row spacingfourside">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card round-box">
                                    <div class="card-content collpase show">
                                        <div class="top-bar">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <h3 class="text-bold">Dashboard</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-8"></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mt-3 tablescrol">
                                                        <table class="customeTable display" id="example"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>User Name</th>
                                                                    <th>Activity</th>
                                                                    <th>Dials</th>
                                                                    <th>Hours</th>
                                                                    <th>Emails</th>
                                                                    <th>Wrong#</th>
                                                                    <th>NoInterest</th>
                                                                    <th>App/bank</th>
                                                                    <th>Bad WT</th>
                                                                    <th>Sell the D</th>
                                                                    <th>Call Back</th>
                                                                    <th>NC Data</th>
                                                                    <th>NC Web</th>
                                                                    <th>DoNotCall</th>
                                                                    <th>Not Qualif</th>
                                                                    <th>Secretary</th>
                                                                    <th>Spoke with</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="17 " class="text-bold">
                                                                        Main Project
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td><i class="fa fa-user"></i></td> -->
                                                                    <td data-toggle="modal"
                                                                        data-target="#exampleModalCenter5">
                                                                        <img src="./images/useredit.png"
                                                                            alt="" />
                                                                    </td>
                                                                    <td>927370057</td>
                                                                    <td>Hector Calderon C & A Consulting</td>
                                                                    <td>09/28/2022 11:00 AM</td>
                                                                    <td>09/28/2022 10:00 AM CDT</td>
                                                                    <td>09/23/2022 2:55 PM</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-toggle="modal"
                                                                        data-target="#exampleModalCenter5">
                                                                        <img src="./images/useredit.png"
                                                                            alt="" />
                                                                    </td>

                                                                    <td>923519875</td>
                                                                    <td>
                                                                        CONNIE CRANFORD ELITE FACTORY FINISHES LLC
                                                                    </td>
                                                                    <td>10/17/2022 10:45 AM</td>
                                                                    <td>10/17/2022 9:45 AM CDT</td>
                                                                    <td>09/07/2022 4:01 PM</td>
                                                                    <td>Mobile: (817) 505-7577</td>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalqw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Edit
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="form-group d-flex justify-content-between gap-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="User Name" />
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="User Name" />
                        </div>
                        <div class="form-group d-flex justify-content-between gap-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Activity" />
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Dials" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Hour" />
                        </div>

                        <div
                            class="form-group d-flex justify-content-between addressmodalContainer flex-md-nowrap flex-wrap">
                            <input type="time" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Price" />

                            <input type="date" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" placeholder="Zip code" />
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                placeholder="	Phone Numbers" />
                        </div>
                    </div>

                    <div class="modalbtnContainer">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="addbtn">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN VENDOR JS-->

    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>

    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatables-extensions/datatable-keytable.js') }}"></script>

    <!-- END PAGE LEVEL JS-->
    <script src="{{ asset('src/js/core/Header.js') }}"></script>
    <script src="{{ asset('src/js/core/sidebar.js') }}"></script>
</body>
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>

<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('assets/dateTable/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/dateTable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/js/core/table.js') }}"></script>

</html>
