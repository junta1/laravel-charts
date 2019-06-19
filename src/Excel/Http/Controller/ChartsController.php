<?php


namespace Excel\Http\Controller;


use Excel\Charts\SampleChart;
use App\Http\Controllers\Controller;
use Excel\Model\PlanilhaModel;
use Khill\Lavacharts\Lavacharts;

class ChartsController extends Controller
{
    protected $charts;

    public function __construct(SampleChart $sampleChart)
    {
        $this->charts = $sampleChart;
    }

    public function grafico()
    {
        $lava = $this->charts->grafico();

        $highCharts = $this->charts->highCharts();

        return view('charts', [
            'lava' => $lava,
            'highCharts' => $highCharts,
        ]);
    }
}