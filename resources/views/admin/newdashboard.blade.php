<!DOCTYPE html>
<html lang="en">
<head>
    <x-projecthead/>
    @section('title')
        My Project
    @endsection
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .content-info {
            background: #f9f9f9;
            padding: 0px 0;
            background-size: cover !important;
            background-position: top center !important;
            background-repeat: no-repeat !important;
            position: relative;
            padding-bottom: 100px;
        }

        table {
            width: 100%;
            background: #fff;
            border: 1px solid #dedede;
        }

        table thead tr th {
            padding: 5px;
            border: 1px solid #dedede;
            color: #000;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background: #f9f9f9;
        }

        table.result-point tr td.number {
            width: 100px;
            position: relative;
        }

        .text-left {
            text-align: left !important;
        }

        table tr td {
            padding: 10px 20px;
            border: 1px solid #dedede;
        }

        table.result-point tr td .fa.fa-caret-up {
            color: green;
        }

        table.result-point tr td .fa {
            font-size: 20px;
            position: absolute;
            right: 20px;
        }

        table tr td {
            padding: 4px 30px;
            border: 1px solid #dedede;
        }

        table tr td img {
            max-width: 32px;
            float: left;
            margin-right: 11px;
            margin-top: 1px;
            border: 1px solid #dedede;
        }

        .vl {
            border-left: 1px solid black;
            height: 60px;
        }


    </style>
</head>
<body style="background-color: #fff !important;">
<x-projectnavbar/>
<div class="justify-content-between mb-4">
    <form action="/newdashboard" method="post">
        @csrf
        <div class="mt-1">
            <div class="row align-items-center">
                <div class="col-md-1"></div>
                <div class="col-md-10"
                     style="background-color: #e8e8e8; padding: 0px 15px;border: 1px solid var(--bordercolor) !important; border-radius: 8px !important;">
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
@if($projects->count())
    <div style="background-color:white; padding:10px;">
        <div class="leftspacing adminview px-2">
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
        </div>
    </div>
@else
    <div style="background-color:white; padding:10px;">
        <div class="leftspacing adminview px-2">
            <div class="ml-3 mr-4">
                <table class="table table-bordered table-hover">
                    <thead class="shadow-sm">
                    <tr>
                        <th class="text-center">No Records Found.</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endif
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
