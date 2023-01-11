<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <link rel="stylesheet" href="{{ asset('assets/dateTable/jquery.dataTables.min.css') }}" />
    <title>Search - CRM</title>
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <div class="app-content ">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row spacingfourside ">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-12  ">
                                <div class="card round-box ">
                                    <div class="card-content collpase show">
                                        <div class="top-bar">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <h3 class="text-bold">Search Contact</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="">
                                                        <a href="" class="btn btn-success">Quick</a>
                                                        <a href="" class="btn btn-primary">Advance</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="">
                                                        {{-- <div class="searchiconinput">
                                                            <input type="text" placeholder="Search"
                                                                class="form-control" name="" id="" />
                                                            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                                            <ion-icon name="search-outline"></ion-icon>
                                                        </div> --}}
                                                    </div>
                                                    <div class="mt-3 tablescrol">
                                                        <table class="customeTable display" id="example"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Last Name</th>
                                                                    <th>First Name</th>
                                                                    <th>Address 1</th>
                                                                    <th>Company</th>
                                                                    <th>Title</th>
                                                                    <th>City</th>
                                                                    <th>St/Prov</th>
                                                                    <th>Zip/Postal</th>
                                                                    <th>Country</th>
                                                                    <th>Email</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($contacts as $item)
                                                                    <tr>
                                                                        <td>
                                                                            <ion-icon name="chevron-forward-outline">
                                                                            </ion-icon>
                                                                        </td>
                                                                        <td>{{ $item->first_name ?? '' }}</td>
                                                                        <td>{{ $item->last_name ?? '' }}</td>
                                                                        <td>{{ $item->address ?? '' }}</td>
                                                                        <td>{{ $item->company ?? '' }}</td>
                                                                        <td>{{ $item->title ?? '' }}</td>
                                                                        <td>{{ $item->city ?? '' }}</td>
                                                                        <td>{{ $item->state ?? '' }}</td>
                                                                        <td>{{ $item->zip ?? '' }}</td>
                                                                        <td>{{ $item->country ?? '' }}</td>
                                                                        <td>{{ $item->email ?? '' }}</td>
                                                                    </tr>
                                                                @endforeach

                                                                {{-- <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td>John</td>
                                                                    <td>Smith</td>
                                                                    <td></td>
                                                                    <td>Elite freestyle karate llc</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Massachusetts</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>efk1@aol.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(856348109,171649 )">
                                                                        test
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                        joe
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348109,171649 )">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(856348176,171649 )">
                                                                        test
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                        da
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348176,171649 )">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(856348253,171649 )">
                                                                        test
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                        ma
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(856348253,171649 )">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(857385370,171649 )">
                                                                        test
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                        Ryan
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                        Ryan Group
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(857385370,171649 )">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497737,171649 )">
                                                                        Meyer
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                        Gary
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                        Elite freestyle karate llc
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                        Massachusetts
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497737,171649 )">
                                                                        efk1@aol.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497742,171649 )">
                                                                        Clark
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                        Juan
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                        Aqua water tech inc.
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                        Florida
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497742,171649 )">
                                                                        juanclark64@gmail.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>

                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497743,171649 )">
                                                                        Ramirez
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                        Jesse
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                        Perseverance group llc
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                        Texas
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497743,171649 )">
                                                                        perseverancegroup@gmail.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497744,171649 )">
                                                                        Bashir
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                        Mohammad
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                        Empower usa inc
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                        New york
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497744,171649 )">
                                                                        newerstyle@outlook.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497745,171649 )">
                                                                        Kraimer
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                        Brett
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                        E i b s llc
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                        Maryland
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497745,171649 )">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ion-icon name="chevron-forward-outline">
                                                                        </ion-icon>
                                                                    </td>
                                                                    <td class="gridName"
                                                                        onclick="openQuickView(866497747,171649 )">
                                                                        Nicholas
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                        Ilya
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                        Basketball specialists school
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                        Massachusetts
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                    </td>
                                                                    <td onclick="openQuickView(866497747,171649 )">
                                                                        pnmarlboro@aol.com
                                                                    </td>
                                                                </tr> --}}
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
