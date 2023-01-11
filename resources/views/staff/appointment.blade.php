<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <link rel="stylesheet" href="{{ asset('assets/dateTable/jquery.dataTables.min.css') }}" />
    <title>Appointments - CRM</title>
    <!-- ///Custome css -->
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.min.css') }}" />
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <!-- END Custom CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="row spacingfourside  p-0">
                            <div class="col-md-12">
                                <div class="card round-box">
                                    <div class="card-content collpase show">
                                        <div class="top-bar">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <h3 class="text-bold mt-1">My Scheduled Appointments</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-8"></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mt-3  tablescrol">
                                                        <table class="customeTable display" id="example"
                                                            style="width: 100%">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>ID</th>
                                                                    <th>Contact Name (Company)</th>
                                                                    <th>From</th>
                                                                    <th>To</th>
                                                                    <th>Created</th>
                                                                    <th>Phone Numbers</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($appointments as $item)
                                                                    <tr>
                                                                        <!-- <td><i class="fa fa-user"></i></td> -->
                                                                        <td data-toggle="modal"
                                                                            data-id="{{ $item->id }}"
                                                                            class="edit_appointment"
                                                                            data-target="#exampleModalCenter5"> <img
                                                                                src="{{ asset('images/useredit.png') }}"
                                                                                alt="">
                                                                        </td>
                                                                        <!-- <img src="./images/" alt=""> -->
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->title }}</td>
                                                                        <td>{{ $item->date_from }}
                                                                            {{ $item->time_from }}</td>
                                                                        <td>{{ $item->date_to }}
                                                                            {{ $item->time_to }}</td>
                                                                        <td>{{ date('D m,Y', strtotime($item->created_at)) }}
                                                                        </td>
                                                                        <td>{{ $item->phone_number ?? '' }}</td>
                                                                    </tr>
                                                                @endforeach

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
    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" aria-labelledby="exampleModalLabel"
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title text-bold" id="exampleModalLongTitle">
                        <ion-icon name="people-outline"></ion-icon>

                        Scheduled Appointments
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/update-appointment') }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <input type="number" class="form-control" name="id" id="update_id"
                                    placeholder="ID" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Contact Name (Company)" />
                            </div>

                            <div
                                class="form-group d-flex justify-content-between addressmodalContainer flex-md-nowrap flex-wrap">

                                <input type="time" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Price" name="time_from" id="time_from" />

                                <input type="date" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Zip code" name="date_from" id="date_from" />

                            </div>
                            <div
                                class="form-group d-flex justify-content-between addressmodalContainer flex-md-nowrap flex-wrap">

                                <input type="time" class="form-control" id="time_to"
                                    aria-describedby="emailHelp" name="time_to" placeholder="Price" />

                                <input type="date" class="form-control" name="date_to" id="date_to"
                                    aria-describedby="emailHelp" placeholder="Zip code" />

                            </div>
                            <div class="form-group">
                                <input type="number" name="phone_number" id="phone_number" class="form-control"
                                    placeholder="	Phone Numbers" />
                            </div>


                        </div>

                        <div class="modalbtnContainer">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="addbtn" type="submit">Edit</button>
                        </div>
                    </div>
                </form>
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
    <!-- END PAGE LEVEL JS-->
    <script src="{{ asset('src/js/core/Header.js') }}"></script>
    <script src="{{ asset('src/js/core/sidebar.js') }}"></script>
    <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets/dateTable/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/dateTable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/js/core/table.js') }}"></script>



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
<script>
    $(document).ready(function() {
        $('.edit_appointment').click(function() {

            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '/edit-appointment/',
                data: {
                    id
                },

                success: function(data) {
                    $('#exampleModalCenter5').modal('show');

                    $('#update_id').val(data.id);
                    $('#title').val(data.title);
                    $('#time_from').val(data.time_from);
                    $('#time_to').val(data.time_to);
                    $('#date_from').val(data.date_from);
                    $('#date_to').val(data.date_to);



                    $('#phone_number').val(data.phone_number);





                }
            });
        });
    });
</script>

</html>
