<?php

namespace App\Http\Controllers;

class ChartController extends Controller
{
    public function index()
    {
        $dados = [
            [
                'Ação', 'Horário'
            ],
            [
                'Acordando', 8
            ],
            [
                'Comendo', 9
            ],
            [
                'Trabalhando', 10
            ],
        ];

        $pdf = \PDF::loadView('chartjs', ['dados' => json_encode($dados)]);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('chart.pdf');
    }
}
