<!DOCTYPE html>
<html lang="pt">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .pie-chart, #curve_chart {
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
                callback: 'drawCharts'
            });
        }

        google.charts.setOnLoadCallback(drawCharts);

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

            // Se você deseja adicionar os valores de dados como anotações nas barras,
            //  a maneira mais fácil é criar um DataView que inclua uma coluna de função de anotação
            // calculada que retire seus dados da coluna de valores e os restrinja:
            var view = new google.visualization.DataView(data);

            //Cada configuração servirá para cada item da coluna
            view.setColumns([0,
                1, {
                type: 'string',
                role: 'annotation',
                sourceColumn: 1,
                calc: 'stringify'
            },
                2,{
                type: 'string',
                role: 'annotation',
                sourceColumn: 2,
                calc: 'stringify'
            }

            ]);

            var options = {
                title: 'Minhas atividades do dia',
                vAxis: {title: 'Lado esquerdo'},
                hAxis: {title: 'Embaixo'},
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
            chart.draw(view, options);
        }

    </script>
</head>

<body onload="init()">
<div id="piechart" class="pie-chart"></div>
</body>

{{--{!! dd($dados) !!}--}}

</html>