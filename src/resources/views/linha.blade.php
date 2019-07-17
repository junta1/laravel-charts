<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>Gráficos colunas + linha</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load Charts and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        //Carrega o gráfico
        google.charts.setOnLoadCallback(linhaCurva);
        google.charts.setOnLoadCallback(coluna);

        function coluna() {

            //Dados
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Coding', 11],
                ['Eat', 1],
                ['Commute', 2],
                ['Looking for code Problems', 4],
                ['Sleep', 6]
            ]);

            //Personalizações
            var options = {
                title: 'Minhas atividades do dia',
                vAxis: {title: 'Lado esquerdo'},
                hAxis: {title: 'Embaixo'},
                width:600,
                height:400
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        function linhaCurva() {

            //Dados
            var data = google.visualization.arrayToDataTable([
                ['Grupos', 'Previsto', 'Executado'],
                ['MÊS 01',  75,      72],
                ['MÊS 02',  100,      92],
                ['MÊS 03',  75,       75],
                ['MÊS 04',  65,      65]
            ]);

            var options = {
                title: 'Cronograma',
                curveType: 'function',
                legend: { position: 'bottom' },
                width:700,
                height:500
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<!--Table and divs that hold the pie charts-->
<table class="columns">
    <tr>
        <td><div id="piechart" style="border: 1px solid #ccc"></div></td>
        <td><div id="curve_chart" style="border: 1px solid #ccc"></div></td>
    </tr>
</table>
</body>
</html>
