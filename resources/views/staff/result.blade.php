{{-- @extends('staff.layouts.master')
@section('title')
    ResultCode
@endsection
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <x-dashboardhead/>
</head>
<body>
    <x-dashheader />
        <div class="d-flex justify-content-around px-sm-3 px-0 resultcodemain" style="margin-top:-40px;">
            <div id="sideBar" class="resultCodeSideBar">
                <div class="resultCodeSideBarHeader">
                    <a href="{{ URL::previous() }}"><ion-icon id="toggleHandle" name="arrow-back-circle-outline"></ion-icon></a>
                    <div>
                        <h5>Result Codes</h5>
                    </div>
                </div>
                @php $num = 0 @endphp
                @foreach($resultcode as $code)
                <div class="sideBraGrayBox">
                    <p>{{$code->result_description}}</p>
                    <button class="addbtn" onclick="resultcode('{{$num}}')" id="result{{$num}}">{{$code->result_code}}</button>
                </div>
                @php $num++ @endphp
                @endforeach

            </div>

            <div class="leftresultcideBox">
                <div id="leftspace" class="leftspacing">
                    <div class="tab-bar round-box">
                        <h4 class="d-flex align-items-center">
                            <ion-icon class="menu mr-2" id="adminmenuicon" onclick="sideBarHandler()" name="menu">
                            </ion-icon>
                            Please Select a Result Code
                        </h4>
                    </div>
                    <form action="{{url('add-activity')}}" method="POST">
                        @csrf
                    <div class="resultTextBox">
                        
                        <input type="hidden" name="project_id" value="{{$data->id}}">
                        <input type="hidden" name="name" value="{{auth()->user()->first_name}}">
                        <input type="hidden" name="activity_time" id="activity">
                        <script>
                            var today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                            var yyyy = today.getFullYear();
                            if(mm == 1){
                                mm = 'Jan';
                            }
                            else if(mm == 2){
                                mm = 'Feb';
                            }
                            else if(mm == 3){
                                mm = 'Mar';
                            }
                            else if(mm == 4){
                                mm = 'Apr';
                            }
                            else if(mm == 5){
                                mm = 'May';
                            }
                            else if(mm == 6){
                                mm = 'Jun';
                            }
                            else if(mm == 7){
                                mm = 'Jul';
                            }
                            else if(mm == 8){
                                mm = 'Aug';
                            }
                            else if(mm == 9){
                                mm = 'Sep';
                            }
                            else if(mm == 10){
                                mm = 'Oct';
                            }
                            else if(mm == 11){
                                mm = 'Nov';
                            }
                            else if(mm == 12){
                                mm = 'Dec';
                            }
                            else if(mm == 12){
                                mm = 'Dec';
                            }
                            today = dd +' '+mm ;
                            $('#activity').val(today);
                        </script>
                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1">Comments</label>
                            <textarea class="form-control" id="CommentSection" rows="3" name="type"></textarea>
                            <span id="commenterror" style="color:red; display:none;">Fill Out the Comment Section</span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="SubmitBtn" class="addbtn">Result Call & Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <x-projectfooter/>
        <script>
            function GetCommentName(id){
                let Callval = id;
                $('#CommentSection').val(Callval);
            }
            function resultcode($id){
                GetCommentName($('#result'+$id).text());
            };
        </script>

    </body>
{{-- @endsection --}}
</html>
