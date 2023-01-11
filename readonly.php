<?php

readonly class Pessoa
{
    public function __construct(
        public string $nome,
        public string $sobrenome,
        public int $idade,
    )
    {}
}

$joao = new Pessoa('João', 'Pessoa', 30);

var_dump($joao);