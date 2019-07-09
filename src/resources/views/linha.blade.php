<html>
<head>
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
                ['Year', 'Vendas', 'Despesas'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                title: 'Desempenho da Empresa',
                curveType: 'function',
                legend: { position: 'bottom' },
                width:600,
                height:400
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
