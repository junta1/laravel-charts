<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .pie-chart {
            width: 900px;
            height: 500px;
            margin: 0 auto;
        }
    </style>
    {{-- make sure you are using http, and not https --}}
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script type="text/javascript">
        function init() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                // callback: 'drawCharts'
            });
        }

        // Draw the pie chart for Sarah's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawCharts);

        // Draw the pie chart for the Anthony's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawAnthonyChart);

        function drawCharts() {

            var dados = <?php  echo $dados; ?>;

            // var data = google.visualization.arrayToDataTable([
            //     ['Task', 'Hours per Day'],
            //     ['Coding', 11],
            //     ['Eat', 1],
            //     ['Commute', 2],
            //     ['Looking for code Problems', 4],
            //     ['Sleep', 6]
            // ]);

            var data = google.visualization.arrayToDataTable(dados);

            var options = {
                title: 'Minhas atividades do dia',
                vAxis: {title: 'Lado esquerdo'},
                hAxis: {title: 'Embaixo'},
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        function drawAnthonyChart() {

            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body onload="init()">
<div id="piechart" class="pie-chart"></div>
<td><div id="curve_chart" style="border: 1px solid #ccc"></div></td>

</body>

{{--{!! dd($dados) !!}--}}

</html>