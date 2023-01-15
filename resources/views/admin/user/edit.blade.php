<!DOCTYPE html>
<html lang="en">
<head>
    <x-projecthead />
    @section('title')
    My Project
    @endsection

    <style>
        #nav-home {
            padding-bottom: 15px !important;
            border-radius: 10px !important;
            border: 1px solid #fff !important;
            background-color: white;
        }

    </style>
</head>
<body>
    <x-projectnavbar />
    <div class='row'>
        <div class='col-xl-3'>
        </div>
        <div class='col-xl-6'>
            <div class="tableContainer" style='height: auto !important;'>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active pt-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="actimeproject mt-4" style="border-radius: 0px !important;">
                            <div class='row'>
                                <div class='col-xl-12'>
                                    <div class=" projectTable" style="height: fit-content !important;">
                                        <div class="px-4" style=''>
                                            <div class='row'>
                                                <div class="col-xl-12 mb-3">
                                                    <h4>Edit User</h4>
                                                    <hr>
                                                </div>
                                            </div>
                                            <form action="{{url('update-user')."/".@$user->id}}" method="post">
                                                @csrf
                                                @include('admin.user.form')
                                            </form>
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
    <script>

    </script>
    @include('admin.user.js')
    <x-projectfooter />
</body>
</html>
