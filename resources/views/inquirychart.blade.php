<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://www.google.com/jsapi"></script>
    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
  
<h2 class="text-center">Inquiry Status Analysis</h2>
  
<div id="chartDiv" class="pie-chart"></div>

  
<script type="text/javascript">
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
  
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'data1');
        data.addColumn('number', 'status');
        data.addRows([
            ['New',{{$chartdata['new']}}],
            ['Active',{{$chartdata['active']}}],
            ['Expired',{{$chartdata['expired']}}]
        ]);
  
        var options = {
            title: 'Popularity of Types of Framework',
            sliceVisibilityThreshold: .2
        };
  
        var chart = new google.visualization.BarChart(document.getElementById('chartDiv'));
        chart.draw(data, options);
    }
</script>
  
</body>
</html>