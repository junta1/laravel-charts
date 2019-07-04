<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

        $visitor = DB::table('visitor')
            ->select(
                DB::raw("year(created_at) as year"),
                DB::raw("SUM(click) as total_click"),
                DB::raw("SUM(viewer) as total_viewer"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get();

        $result[] = ['Ano','Cliques','Visualizações'];

        foreach ($visitor as $key => $value) {
            $result[++$key] = [(string)$value->year, (int)$value->total_click, (int)$value->total_viewer];
        }

        $pdf = \PDF::loadView('chartjs', ['dados' => json_encode($result)]);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('chart.pdf');
    }
}
