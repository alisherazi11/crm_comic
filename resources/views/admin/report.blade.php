<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reporting</title>
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- <link href="Content/bootstrap.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/reporting.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
    #chartdiv {
        width: 100%;
        height: 400px;
    }

    #chartdiv2 {
        width: 100%;
        height: 400px;
    }
</style>
<style>
    #chartdiv3 {
        width: 100%;
        height: 400px;
    }

    #chartdiv4 {
        width: 100%;
        height: 400px;
    }
</style>

<body>
    <sidebar-element></sidebar-element>

    <div id="header"></div>

    <div class="reportingContainer">
        <div class="reportWrapper">
            <ul class="nav nav-tabs border-none reporttingTbas" role="tablist">
                <li class="nav-item">
                    <button class="home-tab reportbtn active" id="" data-toggle="tab" href=".home"
                        role="tab" aria-controls="home" aria-selected="true">
                        Sales Board
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="profile-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="profile" aria-selected="false">
                        Sales People
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="mark-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="mark" aria-selected="false">
                        Marketing
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="contact-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="contact" aria-selected="false">
                        Managers
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="lead-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="lead" aria-selected="false">
                        Lead Resource
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="deal-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="deal" aria-selected="false">
                        Deals
                    </button>
                </li>
                <li class="nav-item">
                    <button class="reportbtn" id="appoinment-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="appoinment" aria-selected="false">
                        Appointment
                    </button>
                </li>

                <li class="nav-item">
                    <button class="reportbtn" id="leaderboard-tab" data-toggle="tab" href=".profile1" role="tab"
                        aria-controls="leaderboard" aria-selected="false">
                        Leaderboard
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="home tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                    <div class="reportChartBox">
                        <div class="dropdownContainer">
                            <div class="dropdown">
                                <button class="reportdropdown dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    my total lead count and activity
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        How many leads I have not acted on
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        How quickly I follow up on leads
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        How many times I try to contact each lead
                                    </a>
                                    <a class="dropdown-item" href="#"> My closed leads </a>
                                </div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <select class="selLead" name="" id="">
                                    <option>Web Leads</option>
                                    <option>Manual Leads</option>
                                    <option>All Leads</option>
                                </select>
                                <select class="selLead longdropdown" name="" id="">
                                    <option>Custome Date</option>
                                    <option>Today</option>
                                    <option>YEsterday</option>
                                    <option>This Week(Mon-Sun)</option>
                                    <option>Last 7 days</option>
                                    <option>Last Week(Mon-Sun)</option>
                                    <option>This 14 days</option>
                                    <option>This Month</option>
                                    <option>Last 30 days</option>
                                    <option>This Year</option>
                                    <option>All Times</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <p class="p1">
                                Reporting results may be cached for up to 10 minutes.
                                <a href=""> Refresh results.</a>
                            </p>
                        </div>

                        <div class="seconddropdown">
                            <select class="selLead longdropdown" name="" id="">
                                <option>New Leads</option>
                                <option>Appointments</option>
                                <option>Avg. Contact Attempts</option>
                                <option>Deals Closed</option>
                                <option>Deal Commission</option>
                                <option>Conversion Rate</option>
                            </select>

                            <p class="p1">Vs</p>
                            <select class="selLead longdropdown" name="" id="">
                                <option> Nothing</option>
                                <option> Appointments</option>
                                <option> Avg. Contact Attempts </option>
                                <option> Deals Closed</option>
                                <option> Deal Commission</option>
                                <option> Conversion Rate</option>
                            </select>

                            <select class="selLead " name="" id="">
                                <option> Hourly</option>
                                <option> Days</option>

                            </select>

                            <div class="capmareBox">
                                <input type="checkbox" name="" id="" />
                                <div>
                                    <p class="p1">Compare to previous period:</p>
                                    <h5>Jun 21st 12am - Jun 21st 11pm</h5>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2 px-3">
                            <div id="chartdiv4"></div>
                        </div>

                        <div class="reportsmallContainer">
                            <div class="reportsmallBox">
                                <p>New Leads</p>
                                <h6 class="zero">0</h6>
                            </div>
                            <div class="reportsmallBox borderblue">
                                <p>Appointment</p>
                                <h6 class="zero">0</h6>
                            </div>
                            <div class="reportsmallBox borderred">
                                <p>Avg. Contact Attempts</p>
                                <h6 class="zero">0.00</h6>
                            </div>
                            <div class="reportsmallBox">
                                <p>Deals Closed</p>
                                <h6 class="zero">0</h6>
                            </div>
                            <div class="reportsmallBox">
                                <p>Deal Value</p>
                                <h6 class="zero">0</h6>
                            </div>
                            <div class="reportsmallBox">
                                <p>Deal Commission</p>
                                <h6 class="zero">0</h6>
                            </div>
                            <div class="reportsmallBox">
                                <p>Conversion Rate</p>
                                <h6 class="zero">0.00%</h6>
                            </div>
                            <div class="reportsmallBox adddcustome">
                                <p>+ Add Colums</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile1 tab-pane fade" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="reportChartBox">
                        <div class="dropdownContainer">
                            <div class="dropdown">
                                <button class="reportdropdown dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    my total lead count and activity
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        How many leads I have not acted on
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        How quickly I follow up on leads
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        How many times I try to contact each lead
                                    </a>
                                    <a class="dropdown-item" href="#"> My closed leads </a>
                                </div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <select class="selLead" name="" id="">
                                    <option>Web Leads</option>
                                    <option>Manual Leads</option>
                                    <option>All Leads</option>
                                </select>
                                <select class="selLead longdropdown" name="" id="">
                                    <option>Custome Date</option>
                                    <option>Today</option>
                                    <option>YEsterday</option>
                                    <option>This Week(Mon-Sun)</option>
                                    <option>Last 7 days</option>
                                    <option>Last Week(Mon-Sun)</option>
                                    <option>This 14 days</option>
                                    <option>This Month</option>
                                    <option>Last 30 days</option>
                                    <option>This Year</option>
                                    <option>All Times</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <p class="p1">
                                Reporting results may be cached for up to 10 minutes.
                                <a href=""> Refresh results.</a>
                            </p>
                        </div>

                        <div class="seconddropdown">
                            <select class="selLead longdropdown" name="" id="">
                                <option>New Leads</option>
                                <option>Appointments</option>
                                <option>Avg. Contact Attempts</option>
                                <option>Deals Closed</option>
                                <option>Deal Commission</option>
                                <option>Conversion Rate</option>
                            </select>

                            <p class="p1">Vs</p>
                            <select class="selLead longdropdown" name="" id="">
                                <option> Nothing</option>
                                <option> Appointments</option>
                                <option> Avg. Contact Attempts </option>
                                <option> Deals Closed</option>
                                <option> Deal Commission</option>
                                <option> Conversion Rate</option>
                            </select>

                            <select class="selLead " name="" id="">
                                <option> Hourly</option>
                                <option> Days</option>

                            </select>

                            <div class="capmareBox">
                                <input type="checkbox" name="" id="" />
                                <div>
                                    <p class="p1">Compare to previous period:</p>
                                    <h5>Jun 21st 12am - Jun 21st 11pm</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 p-0">
                            <div class="col-lg-4 col-md-4">
                                <div id="chartdiv"></div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div id="chartdiv2"></div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div id="chartdiv3"></div>
                            </div>
                        </div>

                        <div>
                            <smart-pivot-table id="pivotTable"></smart-pivot-table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mark" role="tabpanel" aria-labelledby="mark-tab">
                    mark asa
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    ...
                </div>
                <div class="tab-pane fade" id="lead" role="tabpanel" aria-labelledby="lead-tab">
                    .lead
                </div>
                <div class="tab-pane fade" id="deal" role="tabpanel" aria-labelledby="deal-tab">
                    .deal
                </div>

                <div class="tab-pane fade" id="appoinment" role="tabpanel" aria-labelledby="appoinment-tab">
                    .appoinment
                </div>
                <div class="tab-pane fade" id="leaderboard" role="tabpanel" aria-labelledby="leaderboard-tab">
                    .leaderboard
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
<!-- Resources -->

<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>

<script src="{{ asset('src/js/core/Header.js') }}"></script>
<script src="{{ asset('src/js/core/chart.js') }}"></script>

<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
