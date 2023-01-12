<!DOCTYPE html>
<html lang="en">
<head>
    <x-adminhead/>
    @section('title')
        Search Contacts
    @endsection
</head>
<body style="">
<x-adminsidebar/>

<div class="tableContainer">
    <div id="leftspace" class="leftspacing adminview px-2" style="padding: 2rem !important;">
        <h3 class="text-bold text-center mb-3">SMS Templates</h3>
        <div class="pt-4" style="width:100%;">
            <div class="justify-content-between mb-4">
                @php
                    $user = \Illuminate\Support\Facades\Auth::user();
                @endphp
                <form action="/update-order-routing" method="post">
                    @csrf
                    <div class="mt-1">
                        <div class="row align-items-center">
                            <div class="col-md-2"></div>
                            <div class="col-md-8"
                                style="padding: 0px 15px;border: 1px solid var(--bordercolor) !important; border-radius: 8px !important;">

                                <div class="mt-3">
                                    <div class="form-group row ml-0">

                                        <label class="col-sm-12 col-form-label">Many factors determine the routing order of
                                            flagged contacts: routing filter, user quota, call priority, calling periods,
                                            contact ownership,scheduled callback, retry periods, etc.</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="order_by_contact">
                                                <option @if($user->order_by_contact == 'ASC') selected @endif value="ASC">First in,First-Out, The first contacts imported are
                                                    routed first (default)
                                                </option>
                                                <option @if($user->order_by_contact == 'DESC') selected @endif value="DESC">Last in,First-Out, The last contacts imported are routed
                                                    first, uncalled first
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <input type="hidden" name="search_bit" value="1">

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary mb-2 float-right"
                                                style="color: #fff !important; background: #0d6efd !important; border-radius: 5px !important;">
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {


    });
</script>
<x-adminfooter/>
{{-- @endsection --}}

</body>
</html>
