<?php

class Nome
{
    public function __construct(
        public string $nome,
        public string $sobrenome
    ) {
    }
}

class Pessoa
{
    public function __construct(
        public Nome    $nome = new Nome('João', 'Pessoa')
    ) {
    }
}

$joao = new Pessoa;
var_dump($joao);
