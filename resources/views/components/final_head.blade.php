<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
    @yield('title', 'Admin')
</title>

<!-- ///Custome css -->
<script type="text/javascript">
    var url = '{{ URL::asset('
    images / ') }}'

</script>
<link rel="stylesheet" href="{{ asset('assets/dateTable/jquery.dataTables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />



<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/project.css') }}" />
<link rel="stylesheet" href="{{ asset('css/deal.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.min.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>




<link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}" />
<link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}" />
<link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/calendars/clndr.css') }}" />
<link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
 <link rel="stylesheet" href="{{ asset('css/resultcode.css') }}" />







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<style>
    .table-content {
        width: 100%;
        margin: 50px auto;
        text-align: center;
    }

    td {
        width: 100px;
    }

</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">




<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    #example_wrapper {
        padding-bottom: 15px !important;
        border-radius: 10px !important;
        border: 1px solid #fff !important;
        border-top-left-radius: 0px !important;
    }
    
    .nav-tabs {
        margin-bottom: -5px;
        border-bottom: unset !important
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent !important;
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