<!DOCTYPE html>
<html lang="en">
<head>
    <x-adminhead/>
</head>
<body>
<x-adminsidebar/>
<div class="leftresultcideBox" style="background-color:white; padding:20px;">
    <div id="leftspace" class="leftspacing adminview px-2">
        <h3 class="text-bold text-center mb-3">Email & SMS</h3>
        <div class="container mt-5" style="width:100%;">
            <table class="table table-hover table-bordered">
                <thead class="shadow-sm">
                <tr>
                    <th width="10%">Result Code</th>
                    <th width="20%">Result</th>
                    <th width="40%">Email Template</th>
                    <th width="40%">SMS Template</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resultcodedata as $datarc)
                    <tr>
                        <td>
                            {{$datarc->result_code}}
                        </td>
                        <td>
                            {{$datarc->result_description}}
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

<x-adminfooter/>

</body>
</html>
