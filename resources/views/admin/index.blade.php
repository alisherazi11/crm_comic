{{-- @extends('admin.layouts.index')
@section('content')
    <div class="leftresultcideBox">
        <div id="leftspace" class="leftspacing adminview px-2">
            <div class="p-2" id="adminmenuicon">
                <ion-icon name="menu" onclick="sideBarHandler()"></ion-icon>
            </div>

            <h3 class="text-bold text-center mb-3">Admin Dashboard</h3>
            <!-- <div class="row p-0 m-0">
                                                        <div class="barchar col-lg-6">
                                                          <canvas id="barmyChart" ></canvas>
                                                        </div>
                                                        <div class="col-lg-6 d-flex justify-content-center">
                                                          <canvas id="donutsChart2"></canvas>
                                                        </div>
                                                      </div> -->

            <div class="adminBox row p-0 m-0">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox">
                        <p>My projects</p>
                        <h6 class="zero">{{ $projects->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox borderred">
                        <p>My groups</p>
                        <h6 class="zero">{{ $groups->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox">
                        <p>Total users</p>
                        <h6 class="zero">{{ $users->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox ">
                        <div class="d-flex justify-content-between">
                            <p>New users</p>
                            <p>{{ $new_users->count() }}</p>
                        </div>
                        <h6 class="zero">{{ $new_users->count() }}</h6>
                    </div>
                </div>
            </div>

            <div class="adminBox row p-0 m-0">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox">
                        <p>My campaigns</p>
                        <h6 class="zero">{{ $compaigns->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox borderred">
                        <p>Remote Agents</p>
                        <h6 class="zero">{{ $agents->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox">
                        <p>New Deals</p>
                        <h6 class="zero">{{ $new_deals->count() }}</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="reportsmallBox ">
                        <div class="d-flex justify-content-between">
                            <p>Total Deals</p>
                            <p>{{ $deals->count() }}</p>
                        </div>
                        <h6 class="zero">{{ $deals->count() }}</h6>
                    </div>
                </div>
            </div>


            <div class="chartbox">
                <div class="round-box">
                    <div id="chart_div"></div>
                </div>
                <div class="round-box d-flex justify-content-center">
                    <div id="container"></div>
                </div>
            </div>

            <!-- <div class="recent">
                                                        <p class="text-bold">Recent Activity </p>
                                                        <select name="" class="selLead " id="">
                                                          <option value="">Filter</option>
                                                        </select>

                                                      </div> -->
        </div>
    </div>
@endsection --}}

<html>
<head>
    <x-adminhead/>
</head>
<body>
    <x-adminsidebar />

    <x-adminfooter />
</body>
</html>
