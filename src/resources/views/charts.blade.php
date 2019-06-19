<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
</head>
<body>

{{--<div id="poll_div"></div>--}}
{{--{!! $lava->render('BarChart', 'Votes', 'poll_div') !!}--}}


{!! $highCharts->container() !!}

{!! $highCharts->script() !!}

</body>
</html>
