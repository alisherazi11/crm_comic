<!DOCTYPE html>
<html lang="en">
<head>
    <x-projecthead/>
    @section('title')
        My Project
    @endsection
</head>
<body style="">
<x-projectnavbar/>
<div class="justify-content-between mb-4">
    <form action="/newdashboard" method="post">
        @csrf
        <div class="mt-1">
            <div class="row align-items-center">
                <div class="col-md-1"></div>
                <div class="col-md-10 bg-white"
                     style=" padding: 0px 15px;border: 1px solid var(--bordercolor) !important; border-radius: 8px !important;">
                    <div class="row mt-2 mb-3">
                        <div class="col-sm-2">
                            <label for="">Result Codes</label>
                            <select class="form-control" name="result_code" id="">
                                <option selected value="1">Result Codes By Project</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="">Lead Source</label>
                            <select class="form-control" name="lead_source" id="">
                                <option selected value="1">By Lead Source</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="">Date Range</label>
                            <select class="form-control" name="date_range" id="date_range">
                                <option selected value="1">Today</option>
                                <option value="7">Last 7 days</option>
                                <option value="30">Last 30 days</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="">Start</label>
                            <input type="date" id="start" name="start" value="{{ date('Y-m-d') }}" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <label for="">End</label>
                            <input type="date" id="end" name="end" value="{{ date('Y-m-d') }}" class="form-control">
                        </div>
                        <div class="col-sm-2" style="margin-top:30px;">
                                <span style="font-size:10px; color:white;"><button class="btn btn-sm" type="submit"
                                                                                   name="action" value="search"
                                                                                   style="color:white; background-color:#2980B9;">Go</button></span>
                            <span style="font-size:10px; color:white;"><button class="btn btn-sm" name="action"
                                                                               type="submit" value="export"
                                                                               style="color:white; background-color:#2980B9;">
                                        <i class="fa fa-file-excel-o"
                                           aria-hidden="true"></i>Export to Excel</button></span>

                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </form>
</div>
<div class='justify-content-between' style="">
<div class="row align-items-center">
    <div class="col-md-1"></div>
    <div class="col-md-10 bg-white">
    <div class="leftspacing adminview px-2 py-4 mt-4 mb-4" style='margin: unset;'>
        
            @if($projects->count())
                
                <h3 class="text-bold text-center mb-2">Projects Report</h3>
                <div class="ml-3 mr-4">
                    <table class="table table-bordered table-hover">
                        <thead class="shadow-sm">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Project Name</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center">Dials</th>
                            <th class="text-center">Hours</th>
                            <th class="text-center">Emails</th>
                            @if(count($resultCodes))
                                @foreach($resultCodes as $key => $resultCode)
                                    <th class="text-center">{{ ucwords($key) }}</th>
                                @endforeach
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$result['contact_id']}}</td>
                                <td>{{$result['project_name']}}</td>
                                <td>{{$result['contact_name']}}</td>
                                <td>-</td>
                                <td>{{$result['hours']}}</td>
                                <td>-</td>
                                @if(count($resultCodes))
                                    @foreach($resultCodes as $key => $resultCode)
                                        <td>{{ $result[$key] }}</td>
                                    @endforeach
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            @else
                <div class="ml-3 mr-4">
                    <table class="table table-bordered table-hover">
                        <thead class="shadow-sm">
                        <tr>
                            <th class="text-center">No Records Found.</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            @endif
    </div>
    </div>
</div>
<x-projectfooter/>
<script>
    $( document ).ready(function() {
        $('#date_range').change(function(){

            var dateRange = $(this).val();

            var now = new Date();
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

            var toDate = now.setDate(now.getDate()- parseInt(dateRange));
            var d = new Date(toDate);
            var dayLast = ("0" + d.getDate()).slice(-2);
            var monthLast = ("0" + (d.getMonth() + 1)).slice(-2);
            var last = d.getFullYear()+"-"+(monthLast)+"-"+(dayLast);

            $('#start').val(last).trigger('change')
            $('#end').val(today).trigger('change')
        })
    });
</script>
</body>
</html>
