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

        .contentBox {
            max-width: 80%;
            background-color: var(--lightgray);
            padding: 10px;

            border-radius: 10px;
            padding: 10px;
        }

        .contentBoxselect {
            background-color: rgb(128, 128, 128, 0.1);
            margin: 10px 0px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            padding: 10px;

            border-radius: 10px;
            padding: 10px;
        }

        .mangeSel {
            background-color: rgb(128, 128, 128, 0.1);
            padding: 20px;

            border-radius: 10px;
        }

        .blankemail select {
            width: 500px !important;
        }

        .blankemail {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .setcontact {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;

            align-items: center;
        }

        .catgroy {
            border-bottom: 1px dashed rgb(128, 128, 128, 0.6);

            padding: 10px 0px;
        }

        .massageIconBox {
            background-color: rgb(128, 128, 128, 0.1);
            padding: 20px;
            border-radius: 10px;
        }

        .catwrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .catwrapper select {
            width: 500px;
        }

        .status {
            display: flex;
            align-items: center;
            margin: 10px 0px;
            gap: 30px;
        }

        .insetrvariable {
            display: flex;
            justify-content: space-between;
            width: 50%;
            flex-wrap: wrap;
        }

        .insetrvariable button {
            width: 250px !important;
        }

        .htmlBody {
            display: flex;
            justify-content: space-between;
            margin: 20px 0px;
        }

        .msgBox {
            background-color: #fff;
            margin: 10px;
            padding: 20px 0px;
            border-radius: 10px;
        }

        .threeIcon {
            display: flex;
            gap: 12px;
            align-items: center;
            border-left: 1px solid lightgray;
            /* border-right: 1px solid lightgray; */
            padding: 8px 14px;
        }

        .threeIcon ion-icon {
            font-size: 20px !important;
        }

        .Formats {
            background-color: transparent;
            border: none;
            outline: none;
            color: gray;
        }

        .threeIcon img {
            width: 18px;
        }

        .italicPic {
            width: 15px !important;
            margin-top: -2px;
        }

        .massageHeader {
            padding: 0px 20px;

            display: flex;
            align-items: center;
            gap: 10px;
        }

        .Verdanadropdown {
            width: 140px;
            display: flex;

            justify-content: space-between;

            align-items: center;
        }

        .fa-chevron-left {
            margin-top: -1px;
        }

        .left {
            transform: rotate(30deg);
        }

        .threeIconi {
        }

        .fa-chevron-left {
        }

        .fa-chevron-left,
        .fa-chevron-left {
            font-size: 14px;
        }

        .borderx {
            border-left: 1px solid lightgray;
            border-right: 1px solid lightgray;
        }

        .Verdanadropdown::after {
            left: 0px !important;
        }

        .massageHeadersencondrwo {
            margin-top: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--bordercolor);
        }

        .massageBody {
            border-bottom: 1px solid var(--bordercolor);
            width: 100%;
        }

        .massageBody textarea {
            overflow-x: scroll;
            border: none !important;

            height: 300px;
        }

        .plaintextares textarea {
            border: none !important;
        }

        .docuBox {
            border: 1px solid var(--bordercolor);
            width: 260px;
            height: 220px;
            background-color: #fff;
            overflow-x: scroll;
        }

        .arrowBox {
            display: flex;
            flex-direction: column;
        }

        .arrowBox button {
            width: 100px;
            margin: 10px 0px;
        }

        .attachmentBox {
            justify-content: space-between;
            padding-bottom: 40px;
            border-bottom: 1px dashed var(--bordercolor);
            margin: 10px 0px;
            align-items: center;
        }

        .notetext {
            max-width: 900px;
            margin: 10px 0px;
        }

        .blue {
            color: #51a2d7;
        }

        @media only screen and (max-width: 1100px) {
            /*Big smartphones [426px -> 600px]*/
            .blankemail select,
            .catwrapper select {
                width: 100% !important;
            }

            .insetrvariable {
                width: 100%;
            }

            .attachmentBox {
                width: 100%;
            }

            .arrowBox {
                margin: 0px 10px;
            }

            .arrowBox button {
                width: 80px;
            }

            @media only screen and (max-width: 768px) {
                .massageIconBox {
                    padding: 10px;
                }

                .emailtemplateContainer {
                    padding: 10px;
                }

                h5 {
                    font-size: 15px !important;
                }
            }

        }

        .scrollheader {
            width: 800px;
            overflow-x: scroll;
        }

        .headerscrollable {
            overflow-x: scroll;
        }
        .filepond--panel .filepond--panel-root{
            border-style: solid;
            border-color: #6F6F6C
        }

    </style>
</head>
<body>
<x-adminsidebar/>

<div class="emailtemplateContainer">
    <div class="email-wrapper">
        <div class="d-flex justify-content-between">
            <h6>Email Template</h6>
            <button class="addbtn">Save</button>
        </div>

        <div class="contentBox">
            <p>
                By Sending(or allowing to be sent) email messages from SalesCallz,
                you agree to follow the rules in the United States of the
                <span class="blue">CAN-SPAM ACT</span> In Canada the rules of
                <span class="blue"
                >Canad'sAnti-Spam Legislation ( CASL ), or any simllar spam or
              privacy legislation elsewherein the worl
            </span>
            </p>
        </div>
        <div class="contentBoxselect">
            <p>By Default, Caller in this Project send email with</p>
            <select name="" id="" class="selLead">
                <option value="">SalesCallz's Web Email From</option>
            </select>
        </div>

        <p class="my-3">Manage Select Email Templates</p>
        <div class="mangeSel">
            <div class="blankemail">
                <div>
                    <select name="email_temp_id" id="email_temp" class="selLead" onchange="appendEmailvalue()">
                        <option value="0">Blank Email with Signature</option>
                        @foreach($emailTemps as $emailTemp)
                            <option value="{{$emailTemp}}">{{$emailTemp->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="addbtn" onclick="renameEmailTemp()">Rename</button>
                    <button class="addbtn" onclick="deleteEmailTemp()">Delete</button>
                    <button class="addbtn" onclick="addEmailTemp()">Add</button>
                </div>
            </div>
            <div class="catgroy mt-3">
                <div class="catwrapper">
                    <div>
                        <p>Category</p>
                    </div>
                    <div>
                        <select name="" id="" class="selLead">
                            <option value="">No Category</option>
                        </select>
                    </div>
                    <div>
                        <button class="addbtn">Add/Eidt Categories</button>
                    </div>
                </div>

                <div class="status">
                    <p>Status</p>

                    <div class=" ">
                        <input type="checkbox" class="mr-1" name="" id=""/>
                        <label for="">Available to Callers </label>
                    </div>
                </div>
            </div>
            <div class="catgroy">
                <div class="setcontact mt-3">
                    <div>
                        <input type="checkbox" name="" id=""/>
                    </div>
                    <div>
                        <p>Set Contacts for priority routing</p>
                    </div>
                    <div>
                        <select name="" id="" class="selLead">
                            <option value="">No Category</option>
                        </select>
                    </div>
                    <div>
                        <p>after they have opened this email</p>
                    </div>
                </div>

                <div>
                    <label for="re-open">
                        <input type="checkbox" name="" class="mr-2" id="re-open"/>
                        Re-Open Contacts if Closed
                    </label>
                </div>
            </div>
            <div class="catgroy">
                <div class="insetrvariable">
                    <p>CC:</p>
                    <div class="w-75">
                        <div class="form-group d-flex  flex-wrap flex-md-nowrap ">
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="CC"
                            />
{{--                            <button class="addbtn mt-2">Insert Email Variable</button>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="catgroy">
                <div class="insetrvariable">
                    <p>BCC:</p>
                    <div class="w-75">
                        <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="BCC"
                            />
{{--                            <button class="addbtn mt-2">Insert Email Variable</button>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="catgroy">
                <div class="insetrvariable">
                    <p>Subject:</p>
                    <div class="w-75">
                        <div class="form-group d-flex  flex-wrap flex-md-nowrap">
                            <input value=""
                                type="text"
                                name="final_subject"
                                class="form-control"
                                id="final_subject"
                                aria-describedby="emailHelp"
                                placeholder="Email Subject"
                            />
{{--                            <button class="addbtn mt-2  q">Insert Email Variable</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="htmlBody">
            <h6>H6ML Body</h6>
        </div>

        <div class="massageIconBox">
            <div class="msgBox">
                <div class="headerscrollable">
                    <div class="">
                        <textarea name="editor" id="final_temp" style="width: 100%"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3 flex-wrap">
                    <button class="addbtn  mt-2 " onclick="insertUnsubcribeLink()"> Insert Unsubscribe Link</button>
                    <button class="mt-2 addbtn "  onclick="addContactValriable()"> Insert contact Variable</button>
                    <button class="addbtn mt-2" onclick="sendMailModel()">Send Test Email</button>
                </div>
            </div>
        </div>

        <div>
            <h6 class="mt-4 mb-2 px-2">Email Attachment</h6>
        </div>
        <div class="massageIconBox">
            <p>Publish Files in Documents Library</p>

            <div class="attachmentBox" style="">
                <input type="file" class="my-pond" name="filepond" multiple/>
            </div>

            <p class="notetext">
                Note: Attachment Cannot be attached to emails when the "Desktop
                Email Application" preference is used. In order to send these
                attachments when using this setting, you can add the "File Name "
                (as it appears in the list box) to the "plain text Body" field. When
                this email template is used to send email, the "File Names will be
                replaced with a link to the attached dcoument"
            </p>
        </div>

    </div>
</div>
<div style="margin-left:100px;" class="modal fade" id="renameEmail" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:500px;">
            <div class="modal-header py-3 px-3">
                <p class="modal-title text-bold" id="exampleModalLongTitle">Rename Email Template</p>

                <div>
                    <button type="button" class="close"  onclick="hideModal('renameEmail')" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{url('renameEmail')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <p>Name*</p>
                            <input type="text" id="email_temp_name" class="form-control" value=""
                                   Placeholder="Email Template Name" name="email_temp_name"
                                   required>
                            <input name="email_temp_id" id="email_temp_id" value="" hidden>
                        </div>
                    </div>
                    <div class="modalbtnContainer">
                        <button class="addbtn" type="submit">Rename</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="margin-left:100px;" class="modal fade" id="addEmail" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:500px;">
            <div class="modal-header py-3 px-3">
                <p class="modal-title text-bold" id="exampleModalLongTitle">Add Email Template</p>

                <div>
                    <button type="button" class="close" onclick="hideModal('addEmail')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{url('addEmail')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <p>Name*</p>
                            <input type="text" id="email_temp_name" class="form-control" value=""
                                   Placeholder="Email Template Name" name="email_temp_name"
                                   required>
                        </div>
                        <div class="col-md-12 mt-1">
                            <p>Subject*</p>
                            <input type="text" id="email_temp_name" class="form-control" value=""
                                   Placeholder="Email Template Name" name="email_temp_subject"
                                   required>
                        </div>
                        <div class="col-md-12 mt-1">
                            <p>Body*</p>
                            <textarea name="email_temp_body" style="width: 100%" required></textarea>
                        </div>
                    </div>
                    <div class="modalbtnContainer">
                        <button class="addbtn" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div style="margin-left:100px;" class="modal fade" id="sendTestEmail" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:500px;">
            <div class="modal-header py-3 px-3">
                <p class="modal-title text-bold" id="exampleModalLongTitle">Send Test Email</p>

                <div>
                    <button type="button" class="close" onclick="hideModal('sendTestEmail')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{url('renameEmail')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <p>Email*</p>
                            <input type="text" id="Email" class="form-control" value=""
                                   Placeholder="Email Template Name" name="email"
                                   required>
                        </div>
                    </div>
                    <div class="modalbtnContainer">
                        <button class="addbtn" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
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

<!-- include FilePond library -->
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

<script>
    $(function(){
        $('.my-pond').filepond();
        $('.my-pond').filepond({
            allowMultiple: true
        });
        $('.my-pond').filepond('allowMultiple', true);
        $('.my-pond').on('FilePond:addfile', function(e) {
            console.log('file added event', e);
        });
    });
</script>
<script>
    CKEDITOR.replace('editor', {
        with: '100%',
    });
    CKEDITOR.replace('email_temp_body', {
        with: '100%',
    });

    function renameEmailTemp() {
        var emailTemp = $('#email_temp').find(":selected").val();
        var myData = JSON.parse(emailTemp);

        if (typeof myData.id == 'undefined') {
            toastr.info("Please Select The Template First.");
            return;
        }

        $('#email_temp_id').val(myData.id);
        $('#email_temp_name').val(myData.name);
        $('#renameEmail').modal('show');

    }

    function deleteEmailTemp() {
        var emailTemp = $('#email_temp').find(":selected").val();
        var myData = JSON.parse(emailTemp);

        if (typeof myData.id == 'undefined') {
            toastr.info("Please Select The Template First.");
            return;
        }
        $.ajax({
            type: 'GET',
            url: "deleteEmailTemp/" + myData.id,
            success: function (data) {
                toastr.warning("Selected Template Is Deleted.");
                setTimeout(function() {location.reload()}, 2000);
            }
        });
    }

    function addEmailTemp() {
        $('#addEmail').modal('show');
    }

    function appendEmailvalue(){
        var emailTemp = $('#email_temp').find(":selected").val();
        var myData = JSON.parse(emailTemp);
        $('#final_subject').val(myData.subject);
        console.log(myData.subject)

        CKEDITOR.instances['final_temp'].setData(myData.body);
    }

    function insertUnsubcribeLink(){
        var link = '<a href="#" style="color: black">Un-subscribe Email</a>'
        CKEDITOR.instances['final_temp'].insertHtml(link);
    }
    function sendMailModel(){
        $('#sendTestEmail').modal('show');
    }
    function addContactValriable(){
        $('#contactVariables').modal('show');
    }

    function addVariableToBody(){
        var valueVar = $('#variable').find(":selected").val();
        var textValue = '<strong><em>{'+valueVar+'}</em></strong>'
        console.log(textValue)
        CKEDITOR.instances['final_temp'].insertHtml(textValue);
        $('#contactVariables').modal('hide');
    }
    function hideModal(modalId){
        $('#'+modalId).modal('hide');
    }
</script>
</body>
</html>
