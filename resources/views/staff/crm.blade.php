@extends('staff.layouts.master')
@section('title')
    CRM
@endsection
@section('content')

    <body>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div id="header"></div>
        <!-- //headerSide -->
        <sidebar-element></sidebar-element>
        <!-- //blue side bat -->

        <sidebar2-element></sidebar2-element>

        <div class="app-content ">
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
                                                            <h3 class="text-bold">My CRM</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="">
                                                            <a href="" class="btn btn-success ">My Stats</a>
                                                            &nbsp;&nbsp;
                                                            <a href="{{ url('/admin/contacts') }}"
                                                                class="btn btn-primary">My
                                                                Contacts</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mt-2">
                                                            <label for="">Show Statistics For:</label>
                                                            <select name="" class="form-select selLead"
                                                                id="">
                                                                <option value="">Today</option>
                                                                <option value="">Yesterday</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mt-3">

                                                            <h3 class="text-bold">Statistics Per Project</h3>
                                                        </div>

                                                        <div class="mt-1 ">
                                                            <h3 class="text-bold my-2">Main Project</h3>
                                                            <div class="tablescrol">

                                                                <table class="customeTable ">
                                                                    <thead>
                                                                        <tr style="border-bottom: 3px solid gray;">
                                                                            <th></th>
                                                                            <th role="columnheader">User Name</th>
                                                                            <th role="columnheader">Dials</th>
                                                                            <th role="columnheader">Contacts</th>
                                                                            <th role="columnheader">
                                                                                Contact Positive
                                                                            </th>
                                                                            <th role="columnheader">% Positive</th>
                                                                            <th role="columnheader">
                                                                                Contact Negative
                                                                            </th>
                                                                            <th role="columnheader">No Contact</th>
                                                                            <th role="columnheader">Unreachables</th>
                                                                            <th role="columnheader">
                                                                                Contact Send Info
                                                                            </th>
                                                                            <th role="columnheader">
                                                                                Contact Callback
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-toggle="modal"
                                                                                data-target="#exampleModalCenter5">
                                                                                <img src="{{ asset('images/useredit.png') }}"
                                                                                    alt="">
                                                                            </td>
                                                                            <td title=" User Name rob@fundingucapital.com, Dials 3, Total Contacts 1, Contact Positive 0, Positive 0, Contact Negative 1, No Contact 2, Unreachables 0, Contact Send Info 0, Contact Callback 0"
                                                                                tabindex="0"
                                                                                data-accessibility-tab="true">
                                                                                <span
                                                                                    aria-hidden="true">rob@fundingucapital.com</span>
                                                                            </td>
                                                                            <td>3</td>
                                                                            <td>1</td>
                                                                            <td>0</td>

                                                                            <td>0%</td>

                                                                            <td>1</td>
                                                                            <td>2</td>
                                                                            <td>0</td>
                                                                            <td>0</td>
                                                                            <td>0</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <h3 class="text-bold mb-1">Today's Call</h3>
                                                            <div class="tablescrol">
                                                                <table class="customeTable ">
                                                                    <thead>
                                                                        <tr>
                                                                            <td role="columnheader">
                                                                                <span class="aria-invisible">Action</span>
                                                                            </td>
                                                                            <th role="columnheader">Contact Name</th>
                                                                            <th role="columnheader">Company</th>
                                                                            <th role="columnheader">Comments</th>
                                                                            <th role="columnheader">Result Code</th>
                                                                            <th role="columnheader">Duration</th>
                                                                            <th role="columnheader">Call Time</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <ion-icon name="arrow-forward-outline">
                                                                                </ion-icon>
                                                                            </td>
                                                                            <td>
                                                                                <a href="Javascript:viewContact(927368276, 171649, 0, 1, 0)"
                                                                                    data-accessibility-tab="true">Paulino
                                                                                    Abad</a>
                                                                            </td>
                                                                            <td>Mercy A Builders Inc</td>

                                                                            <td></td>

                                                                            <td>NC Web</td>
                                                                            <td>3</td>
                                                                            <td>10/02/2022 4:04 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <ion-icon name="arrow-forward-outline">
                                                                                </ion-icon>
                                                                            </td>
                                                                            <td>
                                                                                <a href="Javascript:viewContact(927368302, 171649, 0, 1, 0)"
                                                                                    data-accessibility-tab="true">Joseph
                                                                                    Girard</a>
                                                                            </td>
                                                                            <td>SOMOCO WIRELESS INC.</td>

                                                                            <td></td>

                                                                            <td>NC Data</td>
                                                                            <td>5</td>
                                                                            <td>10/02/2022 4:04 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <ion-icon name="arrow-forward-outline">
                                                                                </ion-icon>
                                                                            </td>
                                                                            <td>
                                                                                <a href="Javascript:viewContact(924254285, 171649, 0, 1, 0)"
                                                                                    data-accessibility-tab="true">Andrew
                                                                                    Souza</a>
                                                                            </td>
                                                                            <td>National Industrial Tire of Hawaii</td>
                                                                            <td></td>
                                                                            <td>NoInterest</td>
                                                                            <td>16</td>
                                                                            <td>10/02/2022 4:03 AM</td>
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

                            Main Project
                        </p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <form action="{{ url('add-crm') }}" method="post">
                                @csrf

                                <div class="form-group d-flex justify-content-between gap-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="User Name" name="username" />
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Dials" />
                                </div>
                                <div class="form-group d-flex justify-content-between gap-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Contacts" />
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Contact Positive" />
                                </div>
                                <div class="form-group d-flex justify-content-between gap-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Contact Negative" />
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="No Contact" />
                                </div>
                                <div class="form-group d-flex justify-content-between gap-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Unreachables" />
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Contact Send Info" />
                                </div>



                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="	Contact Callback" />
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



    </body>
@endsection
