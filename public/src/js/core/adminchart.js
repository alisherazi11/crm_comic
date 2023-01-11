google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', 'User',],
        ['10-40', 8175000],
        ['20-40', 3792000],
        ['40-40', 2695000],
        ['10-40', 2099000],
        ['10-40', 1526000]
      ]);

      var options = {
        title: 'New Users',
        chartArea: {width: '80%'},
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
        ['New User', 34],
        ['Total Users', 21],
        ['MY CAMPAIGNS', 15],
        ['NEW DEALS', 11],
        ['TOTAL DEALS', 6],
        ['MY GROUPS', 13]
      ]);


      var chart = anychart.pie(data)
// set the chart radius making a donut chart
chart.innerRadius('55%');

chart.title('Users')
chart.container('container');
chart.draw();