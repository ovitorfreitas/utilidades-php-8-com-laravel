<?php

namespace App\Classes;

class Pessoa 
{
    public function __construct(
        public string $nome = "",
        public int $idade = 0,
        public int|float $salario = 0.0,
        public $endereco = null,
    ) {}
}