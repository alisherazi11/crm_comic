
<!DOCTYPE html>
<html lang="en">
<head>
    <x-projecthead />
    <style>
    .nav-list .nav-link:hover:not(.bg-secondary){
        background-color: #eee;
    }

    .nav-list .bg-secondary:hover {
        color: #eee !important;
    }

    .nav-list .nav-link {
        padding-top: 0.01rem !important;
        padding-bottom: 0.01rem !important;
    }

    .arrow {
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
    }

    .up {
        transform: rotate(-135deg);
        -webkit-transform: rotate(-135deg);
    }

    .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    </style>
    @section('title')
    Custom Fields
    @endsection
</head>
<body>
    <x-projectnavbar />
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Custom Fields</h3>
            </div>
            @if(Session::has('error'))
            <div class="alert alert-danger m-2">{{Session::get('error')}}</div>
            @elseif(Session::has('success'))
            <div class="alert alert-success m-2">{{Session::get('success')}}</div>
            @else
            @endif
            <div class="card-body">
                <form class="row" action="{{route('fields.store')}}" method="POST">
                    @csrf
                    <div class="col-md-5">
                        <label for="">Field Name</label>
                        <input type="text" name="field_name" class="form-control" placeholder="Field Name">
                    </div>
                    <div class="col-md-5">
                        <label for="">In Tab</label>
                        <select name="field_tab" id="" class="form-control">
                            <option value="1">Lead Detail</option>
                            <option value="2">Application Detail</option>
                            <option value="3">Additional Detail</option>
                        </select>
                    </div>
                    <div class="col-md-2" style='margin-top: 30px;'>
                        <button class="btn btn-info btn-sm text-white">Submit</button>
                    </div>
                </form>
                <div class="row py-4 px-3 mt-4" style='border-top:0.5px solid #eee'>
                    <div class="col-md-5 py-3" style='border:1px solid #eee;'>
                    <div class="p-0 py-2 px-3 mb-3 nav-list">
                        <div class='row'>
                            <div class='col-sm-10' style='border:1px solid #eee; max-height: 500px !important; min-height: 500px !important; overflow-y: auto;'>
                                <div class='mt-4'>
                                    <h5 class="text-center mb-2">Leads Detail</h5>
                                    <div class='leads-detail-div'>
                                    @foreach($fields as $field)
                                        @if($field->field_tab==1)
                                            <a onclick="setDataFor('.field-value-{{$field->id}}')" data-field-name='{{$field->field_name}}' data-field-status='{{$field->field_status}}' data-field-edit='{{$field->field_permissions_caller_edit}}' data-field-search='{{$field->field_permissions_caller_search}}' data-field-type='' data-field-min='{{$field->field_data_lenght_min}}' data-field-max='{{$field->field_data_lenght_mx}}' data-field-visible="{{$field->field_visible}}" data-field-id='{{$field->id}}' class="nav-link field-value-{{$field->id}} lead-detail cursor-pointer @if($field->id== @$get_field->id) text-white bg-secondary @endif  text-dark p-1">- {{$field->field_name}}</a>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                                <hr>
                                <div class='mt-4'>
                                    <h5 class="text-center mb-2">Application Detail</h5>
                                    <div class='app-detail-div'>
                                    @foreach($fields as $field)
                                        @if($field->field_tab==2)
                                        <a onclick="setDataFor('.field-value-{{$field->id}}')" data-field-name='{{$field->field_name}}' data-field-status='{{$field->field_status}}' data-field-edit='{{$field->field_permissions_caller_edit}}' data-field-search='{{$field->field_permissions_caller_search}}' data-field-type='' data-field-min='{{$field->field_data_lenght_min}}' data-field-max='{{$field->field_data_lenght_mx}}' data-field-visible="{{$field->field_visible}}" data-field-id='{{$field->id}}' class="nav-link field-value-{{$field->id}} curson-pointer app-detail @if($field->id==@$get_field->id) text-white bg-secondary @endif text-dark p-1">- {{$field->field_name}}</a>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                                <hr>
                                <div class='mt-4'>
                                <h5 class="text-center mb-2">Additional Detail</h5>
                                    <div class='add-detail-div'>
                                    @foreach($fields as $field)
                                        @if($field->field_tab==3)
                                        <a onclick="setDataFor('.field-value-{{$field->id}}')" data-field-name='{{$field->field_name}}' data-field-status='{{$field->field_status}}' data-field-edit='{{$field->field_permissions_caller_edit}}' data-field-search='{{$field->field_permissions_caller_search}}' data-field-type='' data-field-min='{{$field->field_data_lenght_min}}' data-field-max='{{$field->field_data_lenght_mx}}' data-field-visible="{{$field->field_visible}}" data-field-id='{{$field->id}}' class="nav-link field-value-{{$field->id}} curson-pointer add-detail @if($field->id==@$get_field->id) text-white bg-secondary @endif text-dark p-1">- {{$field->field_name}}</a>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-2 text-center' style='align-self: center;'>
                                <p><button class='arrow_icons_up mb-3 btn btn-info btn-sm text-white' onClick="move_field(1)"><i class="arrow up text-white"></i></button></p>
                                <p><button class='arrow_icons_down btn btn-info btn-sm text-white' onClick="move_field(2)"><i class="arrow down text-white"></i></button></p>
                            </div>
                        </div>
                    </div>
                     <div class="row mt-2">
                        <div class="col-md-12">
                            {{-- <form method="post" action="{{url('fields')."/".@$get_field->id}}" class="d-inline">
                                @method('DELETE')
                                @csrf --}}
                                {{-- <button type="submit" class="btn btn-info btn-sm">Delete Selected</button> --}}
                            {{-- </form> --}}
                            <a onclick="deleteFieldItem()" class="btn btn-info btn-sm cursor-pointer text-white">Delete Selected</a>
                            <a href="" class='duplicate_field'><button class="btn btn-info btn-sm text-white">
                                    Duplicate </button></a>
                        </div>
                    </div>
                    </div>
                        
                    <div class="col-md-7 p-0 py-2 px-3" style='border:1px solid #eee;'>
                        <form method="post" action="{{url('fields')}}" class="row mt-4 field_form">
                            @csrf
                            <div class="col-md-4 mb-3"><label for="">Name</label></div>
                            <div class="col-md-8 mb-3">
                                <input type="text" class="form-control" name="field_name" id='field_name' value="{{@$get_field->field_name}}" placeholder="Field Name">
                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-4 mb-3"><label for="">Field Status</label></div>
                            <div class="col-md-8 mb-3">
                                <input type="checkbox" name="field_status" id='field_status' @if(@$get_field->field_status==1) checked @endif value="1"> Active
                            </div>
                            <div class="col-md-4 mb-3"><label for="">Visible</label></div>
                            <div class="col-md-8 mb-3">
                                <select name="field_visible" id='field_visible' class="form-control">
                                    <option value="1" @if(@$get_field->field_visible=='1') selected @endif>Always</option>
                                    <option value="0" @if(@$get_field->field_visible=='0') selected @endif>Hidden</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3"><label for="">Permissions</label></div>
                            
                            <div class="col-md-8 mb-3">
                                <input type="checkbox" name="field_permissions_caller_edit" id='field_permissions_caller_edit' @if(@$get_field->field_permissions_caller_edit==1) checked @endif value="1"> Allow Callers to Edit <br>
                                <input type="checkbox" name="field_permissions_caller_search" id='field_permissions_caller_search' @if(@$get_field->field_permissions_caller_search==1) checked @endif value="1"> Allow Callers to Search
                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-4 mb-3"><label for="">Field Type</label></div>
                            <div class="col-md-8 mb-3">
                                <select name="" class="form-control" id="">
                                    <option @if(@$get_field->field_type=='text') selected @endif value="text">Text</option>
                                    <option @if(@$get_field->field_type=='number') selected @endif value="number">Number</option>
                                    <option @if(@$get_field->field_type=='email') selected @endif value="email">Email</option>
                                    <option @if(@$get_field->field_type=='password') selected @endif value="password">Password</option>
                                    <option @if(@$get_field->field_type=='date') selected @endif value="date">Date</option>
                                    <option @if(@$get_field->field_type=='checkbox') selected @endif value="checkbox">Checkbox</option>
                                    <option @if(@$get_field->field_type=='radio-button') selected @endif value="radio-button">Radio Button</option>
                                    <option @if(@$get_field->field_type=='select-box') selected @endif value="select-box">Select Box</option>
                                    <option @if(@$get_field->field_type=='file') selected @endif value="file">File</option>
                                    <option @if(@$get_field->field_type=='textarea') selected @endif value="textarea">Textarea</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb-3"><label for="">Data Length</label></div>
                            <div class="col-md-8 mb-3">
                                Min <input type="number" name="field_data_lenght_min" id='field_data_lenght_min' value="{{@$get_field->field_data_lenght_min}}" class="w-25" style='width: 60px !important; height: 21px !important;'>
                                Max <input type="number" name="field_data_lenght_mx" id='field_data_lenght_mx' value="{{@$get_field->field_data_lenght_min}}" class="w-25" style='width: 60px !important; height: 21px !important;'> character
                            </div>
                        </div>

                        <div class="col-12 text-right mt-3">
                            <button type="submit" class="btn btn-info text-white" style='margin-right: -10px;'>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-projectfooter />
    <script>
        function resetValues(){
            $(".field_form").attr("action", "{{url('fields')}}");
            $("#field_name").val("");
            $("#field_status").attr("checked", false);
            $("#field_permissions_caller_edit").attr("checked", false).change();
            $("#field_permissions_caller_search").attr("checked", false).change();
            $("#field_data_lenght_min").val("");
            $("#field_data_lenght_mx").val("");
            $("#field_visible").val(1);
            $(".patch").remove();
            $(".duplicate_field").attr("href", "");
        }

        function deleteFieldItem(){
            if($(".selected-field-item").length){
                field_id = $(".selected-field-item").data("field-id");
                resetValues();
                $(".selected-field-item").remove();
                
                //Deletion logic starts here
                url = "{{url('fields/delete')}}"+"/"+field_id;
                $.get(url, function(result){

                });
            }
        }

        function move_field(direction){
            //direction 1 = up
            //direction 1 = down
            if($(".selected-field-item").length){
                $(".arrow_icons_up").attr("disabled", true)
                $(".arrow_icons_down").attr("disabled", true)
                field_id = $(".selected-field-item").data("field-id");
                url = "{{url('fields-move')}}"+"/"+field_id+"/"+direction

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(result) {
                        $(".arrow_icons_up").removeAttr("disabled")
                        $(".arrow_icons_down").removeAttr("disabled")
                        console.log(result);

                        selected_field = $(".selected-field-item");
                        if(selected_field.hasClass('lead-detail')){
                            move_item('.leads-detail-div','lead-detail', selected_field, direction);
                        }else if(selected_field.hasClass('app-detail')){
                            move_item('.app-detail-div','app-detail',selected_field, direction);
                        }else if(selected_field.hasClass('add-detail')){
                            move_item('.add-detail-div','add-detail', selected_field, direction);
                        }
                    }
                });
               
            }
        }

        function move_item(parent_div, item_class, selected_item, direction){
            div_str = "div"+parent_div;
            all_items = $(div_str).children();
            if(direction == 1){//move up
                previous_item = selected_item.prev();
                if(previous_item && previous_item.hasClass(item_class)){
                    previous_html = previous_item[0];
                    current_html = selected_item[0];
                    all_items[previous_item.index()] = current_html;
                    all_items[selected_item.index()] = previous_html;
                    $(div_str).html(all_items);            
                }
            }
            else{ //move down
                next_item = selected_item.next();
                if(next_item && next_item.hasClass(item_class)){
                    next_html = next_item[0];
                    current_html = selected_item[0];
                    all_items[next_item.index()] = current_html;
                    all_items[selected_item.index()] = next_html;
                    $(div_str).html(all_items);  
                }
            }
        }

        function setDataFor(class_name){

            resetValues();
            $(".selected-field-item").removeClass('bg-secondary selected-field-item text-white');
            $(class_name).addClass('bg-secondary text-white selected-field-item');

            field_id = $(class_name).data("field-id");
            url = "{{url('fields')}}"+"/"+field_id;
            $(".field_form").attr("action", url);
            $(".field_form").append('<input type="hidden" name="_method" class="patch" value="PATCH">');
            duplicate_url = "{{url('fields/duplicate')}}"+"/"+field_id;
            $(".duplicate_field").attr("href", duplicate_url);
            

            field_name = $(class_name).data("field-name");
            $("#field_name").val(field_name);

            field_status = $(class_name).data("field-status");
            if(field_status == 1)
                $("#field_status").attr("checked", true);
            else 
                $("#field_status").attr("checked", false);


            field_edit = $(class_name).data("field-edit");
            if(field_edit == 1)
                $("#field_permissions_caller_edit").attr("checked", true);
            else 
                $("#field_permissions_caller_edit").attr("checked", false);

            field_search = $(class_name).data("field-search");
            if(field_search == 1)
                $("#field_permissions_caller_search").attr("checked", true);
            else 
                $("#field_permissions_caller_search").attr("checked", false);

            field_min = $(class_name).data("field-min");
            $("#field_data_lenght_min").val(field_min);

            field_max = $(class_name).data("field-max");
            $("#field_data_lenght_mx").val(field_max);

            field_visible = $(class_name).data("field-visible");
            $("#field_visible").val(field_visible);
        }


    </script>
</body>
</html>