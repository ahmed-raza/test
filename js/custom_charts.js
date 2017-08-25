google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['RPM', 000],
  ]);

  var options = {
    width: 400, height: 300,
    redFrom: 9000, redTo: 10000,
    yellowFrom:7500, yellowTo: 9000,
    minorTicks: 5,
    majorTicks: ['0','2500','5000','7500','10000'],
    max: 10000,
    animation: {
      duration: 2000,
    },
  };

  var heat = '';

  var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

  chart.draw(data, options);

  setInterval(function() {
    $.getJSON( "chartdata.php", function( chartdata ) {
      heat = chartdata.heat;
    });
    data.setValue(0, 1, heat);
    chart.draw(data, options);
  }, 3000);
}
