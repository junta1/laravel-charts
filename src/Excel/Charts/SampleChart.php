<?php

namespace Excel\Charts;

use App\Charts\Charts;
use Excel\Model\PlanilhaModel;
use Khill\Lavacharts\Lavacharts;

class SampleChart
{
    public function grafico()
    {
//        $planilha = PlanilhaModel::select()->get()->toArray();

        $lava = new Lavacharts; // See note below for Laravel

        $dataTable = $lava->DataTable();

        $dataTable->addStringColumn('Food Poll')
            ->addNumberColumn('Votes');

        $dataTable->addRow(['Tarefa', 23]);
        $dataTable->addRow(['Nome', 45]);

        $lava->BarChart('Votes', $dataTable, [
            'titleTextStyle' => [
                'fontName' => 'Arial',
                'fontColor' => '#000'
            ],
            'legend' => [
                'position' => 'top'
            ]
        ]);

        return $lava;

    }

    public function highCharts()
    {
        $chart = new Charts();

        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'column', [5, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'column', [4, 5, 2, 1]);
        $chart->dataset('My dataset 3', 'column', [3, 9, 5, 3]);

        return $chart;
    }
}
