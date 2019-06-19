<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planilha')->insert([
            'plan_codigo_tarefa' => Str::random(10) . 'codigo',
            'plan_nome' => Str::random(10) . 'nome',
            'plan_codigo_unidade' => Str::random(10) . 'unidade',
            'plan_quantidade' => rand(),
            'plan_valor_unitario' => rand(),
            'plan_valor_parcial' => rand(),
        ]);
    }
}
