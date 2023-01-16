<!DOCTYPE html>
<html lang="en">
    <head>
        <x-projecthead />
        @section('title')
        Fields
        @endsection
    </head>
    <body>
        <x-projectnavbar />
        <div class="tableContainer">
            <div class="row mt-4 m-2">
                <div class="col-12">
                    <div class="card" style="border-radius:8px !important;">
                        <div class="card-header">
                            <h5>Import Contacts</h5>
                        </div>
                        <div class="card-body">
                            <form class="row" method="POST" enctype="multipart/form-data" action="{{route('import-contacts-store')}}">
                                @csrf
                                <div class="col-md-12">
                                    <label for="">Select file to import</label>
                                    <input type="file" class="form-control" name="file">
                                    <a href="{{url('download-contacts-smaple')}}" download class="text-info">download sample</a>
                                </div>
                                <div class="col-md-12 mb-2 mt-2 text-right">
                                    <button type="submit" class="btn btn-info">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-projectfooter/>
    </body>
</html>