<!DOCTYPE html>
<html lang="en">
<head>
    <x-adminhead/>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <style>
        :root {
            --lightgray: rgba(234, 234, 234, 0.1);
            --gray: rgb(128, 128, 128, 0.1);
            --bordercolor: rgb(119, 136, 153, 0.3);
            --fontsize: 13px;

        }

        .emailtemplateContainer {
            padding: 20px;
        }

        .email-wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid var(--bordercolor);
        }

        .contentBoxselect {
            max-width: 100%;
            background-color: rgb(128, 128, 128, 0.1);
            margin: 10px 0px;
            padding: 10px;
            border-radius: 10px;
        }

        .blankemail select {
            width: 500px !important;
        }

        .catwrapper select {
            width: 500px;
        }

        .insetrvariable button {
            width: 250px !important;
        }
        .threeIcon ion-icon {
            font-size: 20px !important;
        }

        .threeIcon img {
            width: 18px;
        }

        .arrowBox button {
            width: 100px;
            margin: 10px 0px;
        }

        @media only screen and (max-width: 1100px) {
            /*Big smartphones [426px -> 600px]*/
            .blankemail select,
            .catwrapper select {
                width: 100% !important;
            }

            .arrowBox button {
                width: 80px;
            }

            @media only screen and (max-width: 768px) {

                .emailtemplateContainer {
                    padding: 10px;
                }

                h5 {
                    font-size: 15px !important;
                }
            }

        }

        .wd-btn-insert {
            width: 160px !important;
        }

        form .form-group .mt-1{
            text-align: left!important;
        }

    </style>
</head>
<body>
<x-adminsidebar/>

<div class="emailtemplateContainer">
    <div class="email-wrapper">
        <form action="{{url('admin/sms-add')}}" method="post">
            @csrf
            <div class="d-flex justify-content-between">
                <h6>SMS Template</h6>
                <button class="btn btn-primary" style="color: #fff !important; background: #2980B9 !important; border-radius: 5px !important;" type="submit">Save</button>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="contentBoxselect">
                        <div class="form-group row ml-0">

                            <label class="col-sm-3 col-form-label mt-2">Name</label>
                            <div class="col-sm-9 mt-2">
                                <input type="text" name="name" placeholder="No Contact SMS" value="{{$emailTemp ? $emailTemp->name : ''}}" required
                                       class="form-control">
                                <input type="hidden" value="{{$emailTemp ? $emailTemp->id : ''}}" name="id">
                            </div>

                            <label class="col-sm-3 col-form-label mt-2">Status</label>
                            <div class="col-sm-9 mt-2">
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option {{($emailTemp && $emailTemp->status == 'Yes') ? 'Selected' : ''}} value="Yes">Yes</option>
                                    <option {{($emailTemp && $emailTemp->status == 'No') ? 'Selected' : ''}} value="No">No</option>
                                </select>
                            </div>

                            <label class="col-sm-3 col-form-label mt-2">Description</label>
                            <div class="col-sm-9 mt-2">
                                <textarea type="text" rows="1" name="description" class="form-control">{{$emailTemp ? $emailTemp->description : ''}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contentBoxselect">
                        <div class="row ml-0">
                            <div class="col-md-12">
                                <label class="mt-2 ml-1">Send SMS Test To:</label>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="width-90-per">
                                    <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Phone Number"
                                        />
                                        <button class="addbtn" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <h6>SMS Message</h6>
                </div>
                <div class="col-md-6">
                    <div class="contentBoxselect">
                        <div class="form-group row ml-0">
                            <div class="col-sm-9">
                                <div class="width-90-per">
                                    <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                                    <textarea rows="4" name="body" style="height: 120px !important;" id="message_body"
                                              class="form-control mt-1">{{$emailTemp ? $emailTemp->body : ''}}</textarea>

                                    </div>
                                    <span id="remain">{{$emailTemp ? strlen($emailTemp->body) : '120'}}</span> characters remaining
                                </div>
                            </div>
                            <div class="col-sm-3 mt-2">
                                <div class="width-90-per">
                                    <button class="addbtn wd-btn-insert m-1" type="button">Spell Check</button>
                                    <button class="addbtn wd-btn-insert m-1" type="button" onclick="addContactValriable()">Insert
                                        Contact
                                        Variable
                                    </button>
                                    <button class="addbtn wd-btn-insert m-1" type="button" onclick="addOptOutToBody()">Insert Opt-Out
                                    </button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div style="margin-left:100px;" class="modal fade" id="contactVariables" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:500px;">
            <div class="modal-header py-3 px-3">
                <p class="modal-title text-bold" id="exampleModalLongTitle">Select Contact Variable</p>

                <div>
                    <button type="button" class="close" onclick="hideModal('contactVariables')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <p>Variables*</p>
                        <select name="variable" id="variable" class="form-control" onchange="addVariableToBody()">
                            <option value="">Select Variable</option>
                            <option value="name">Name</option>
                            <option value="title">Title</option>
                            <option value="email">Email</option>
                            <option value="phone_number">Phone Number</option>
                            <option value="address">Address</option>

                        </select>
                    </div>
                </div>
                <div class="modalbtnContainer">
                    <button class="addbtn" onclick="hideModal('contactVariables')" type="button">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<x-adminfooter/>


<script>

    var maxchars = 120;

    $('#message_body').keyup(function () {
        var tlength = $(this).val().length;
        $(this).val($(this).val().substring(0, maxchars));
        tlength = $(this).val().length;
        remain = maxchars - parseInt(tlength);
        $('#remain').text(remain);
    });

    function addContactValriable() {
        $('#contactVariables').modal('show');
    }

    function addVariableToBody() {
        var valueVar = $('#variable').find(":selected").val();
        var textValue = '{' + valueVar + '}'
        $('#message_body').val($('#message_body').val() + " " + textValue);
        $('#contactVariables').modal('hide');
    }

    function addOptOutToBody() {
        var textValue = '\r\n\For Unsubscribe reply back with stop.'
        $('#message_body').val($('#message_body').val() + " " + textValue);
    }

    function hideModal(modalId) {
        $('#' + modalId).modal('hide');
    }
</script>
</body>
</html>
