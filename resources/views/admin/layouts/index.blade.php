<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title', 'Admin')
    </title>

    <!-- ///Custome css -->
    <script type="text/javascript">
        var url = '{{ URL::asset('images/') }}'
    </script>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/resultcode.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</head>

<body>
    <div id="header"></div>
    <sidebar-element></sidebar-element>
    <div class="d-flex px-sm-3 px-0 resultcodemain">
        <admin-sidebar></admin-sidebar>

        @yield('content')
    </div>
</body>
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

{{-- <script src="{{ asset('src/js/core/adminchart.js') }}"></script> --}}

<script src="{{ asset('src/js/core/adminsidebarhandler.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
    <!-- Hassan Links -->

<script src="{{ asset('src/js/core/Header.js') }}"></script>
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('src/js/core/adminsidebar.js') }}"></script>
<script src="{{ asset('assets/dateTable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/js/core/table.js') }}"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>
<script>
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = google.visualization.arrayToDataTable([
            ['City', 'User', ],
            ['10-40', 8175000],
            ['20-40', 3792000],
            ['40-40', 2695000],
            ['10-40', 2099000],
            ['10-40', 1526000]
        ]);

        var options = {
            title: 'New Users',
            chartArea: {
                width: '80%'
            },
            hAxis: {
                title: 'Total Users',
                minValue: 0
            },
            vAxis: {
                title: 'City'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }

    var data = anychart.data.set([
        ['New User', {{ $new_users->count() }}],
        ['Total Users', {{ $users->count() }}],
        ['MY CAMPAIGNS', {{ $compaigns->count() }}],
        ['NEW DEALS', {{ $new_deals->count() }}],
        ['TOTAL DEALS', {{ $deals->count() }}],
        ['MY GROUPS', {{ $groups->count() }}]
    ]);


    var chart = anychart.pie(data)
    // set the chart radius making a donut chart
    chart.innerRadius('55%');

    chart.title('Users')
    chart.container('container');
    chart.draw();
</script>



</html>
