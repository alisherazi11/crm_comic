{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead />
        @section('title')
        Fields
        @endsection
    </head>
    <body>
        <x-projectnavbar />
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Fields</h3>
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
                        <div class="col-md-2 mt-4">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 p-0 pt-2 pb-2 border">
                            <h5 class="text-center">Leads Detail</h5>
                            <hr class="m-0">
                            @foreach($fields as $field)
                            @if($field->field_tab==1)
                            <a href="{{route('fields.edit', $field->id)}}" class="nav-link text-dark p-1">{{$field->field_name}}</a>
                            @endif
                            @endforeach
                            <h5 class="text-center">Application Detail</h5>
                            <hr>
                            @foreach($fields as $field)
                            @if($field->field_tab==2)
                            <a href="{{route('fields.edit', $field->id)}}" class="nav-link text-dark p-1">{{$field->field_name}}</a>
                            @endif
                            @endforeach
                            <h5 class="text-center">Additional Detail</h5>
                            <hr>
                            @foreach($fields as $field)
                            @if($field->field_tab==3)
                            <a href="{{route('fields.edit', $field->id)}}" class="nav-link text-dark p-1">{{$field->field_name}}</a>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-8 row">
                            <div class="col-md-6 mb-3"><label for="">Name</label></div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Field Name">
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3"><label for="">Field Status</label></div>
                            <div class="col-md-6 mb-3">
                                <input type="checkbox" name="active" value=""> Active
                            </div>
                            <div class="col-md-6 mb-3"><label for="">Visible</label></div>
                            <div class="col-md-6 mb-3">
                                <select name="" class="form-control" id="">
                                    <option value="">Always</option>
                                    <option value="">Hidden</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3"><label for="">Permissions</label></div>
                            <div class="col-md-6 mb-3">
                                <input type="checkbox"> Allow Callers to Edit <br>
                                <input type="checkbox"> Allow Callers to Search
                            </div>
                            <div class="col-md-6 mb-3"><label for="">Field Type</label></div>
                            <div class="col-md-6 mb-3">
                                <select name="" class="form-control" id="">
                                    <option value="">Text</option>
                                    <option value="">Number</option>
                                    <option value="">Email</option>
                                    <option value="">Password</option>
                                    <option value="">Date</option>
                                    <option value="">Checkbox</option>
                                    <option value="">Radio Button</option>
                                    <option value="">Select Box</option>
                                    <option value="">File</option>
                                    <option value="">Textarea</option>
                                </select>
                            </div>
                            <!--                             <div class="col-md-6 mb-3"><label for="">Data Type</label></div>
                            <div class="col-md-6 mb-3">
                                <select name="" class="form-control" id="">
                                    <option value="">Text</option>
                                    <option value="">Number</option>
                                    <option value="">Email</option>
                                    <option value="">Password</option>
                                    <option value="">Date</option>
                                    <option value="">Checkbox</option>
                                    <option value="">Radio Button</option>
                                    <option value="">Select Box</option>
                                    <option value="">File</option>
                                    <option value="">Textarea</option>
                                </select>
                            </div> -->
                            <div class="col-md-6 mb-3"><label for="">Data Length</label></div>
                            <div class="col-md-6 mb-3">
                                Min <input type="number" min="1" class="w-25"> Max <input type="number" value="100" class="w-25"> character
                            </div>
                            <div class="col-12 text-right">
                                <button type="submit" onclick="alert('There is no selected field, please select a field')" class="btn btn-info">Save</button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="Javascript:void(0)" onclick="alert('There is no selected field, please select a field')" class="btn btn-info"> Delete Selected </a>
                                <a href="Javascript:void(0)" onclick="alert('There is no selected field, please select a field')" class="btn btn-info"> Duplicate Selected </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-projectfooter />
        
    </body>
</html> --}}

@include('admin.edit-fields')