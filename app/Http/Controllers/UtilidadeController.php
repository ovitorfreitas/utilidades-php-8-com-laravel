<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Pessoa;

class UtilidadeController extends Controller
{
    /**
     * Expressão match
     *
     * @return \Illuminate\Http\Response
     */
    public function mes($numeroMes)
    {
        $nomeMes = match(intval($numeroMes)) {
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        };

        return view('index', [
            'response' => $nomeMes
        ]);
    }

    /**
     * Argumentos nomeados 
     * Promoção de propriedade de construtor
     * União de tipos
     * Operador nullsafe
     *
     * @return \Illuminate\Http\Response
     */
    public function pessoa()
    {
        $pessoa = new Pessoa(salario: 10000);

        $numero = $pessoa->endereco?->numero;

        return view('index', [
            'response' => "Salário: {$pessoa->salario} {$numero}"
        ]);
    }
}
