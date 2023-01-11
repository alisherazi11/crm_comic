<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

{{-- <script src="{{ asset('src/js/core/adminchart.js') }}"></script> --}}

<!-- <script src="{{ asset('src/js/core/adminsidebarhandler.js') }}"></script> -->
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
    if(document.getElementById('chart_div') !=null){
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

        {{-- // var data = anychart.data.set([
         //     ['New User', {{ $new_users->count() }}],
         //     ['Total Users', {{ $users->count() }}],
         //     ['MY CAMPAIGNS', {{ $compaigns->count() }}],
         //     ['NEW DEALS', {{ $new_deals->count() }}],
         //     ['TOTAL DEALS', {{ $deals->count() }}],
         //     ['MY GROUPS', {{ $groups->count() }}]
         // ]);
         --}}


        var chart = anychart.pie(data)
        // set the chart radius making a donut chart
        chart.innerRadius('55%');

        chart.title('Users')
        chart.container('container');
        chart.draw();
    }
</script>
