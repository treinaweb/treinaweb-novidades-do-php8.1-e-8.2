<?php

class Pessoa
{
    public $nome;
    public $sobrenome;
}

$joao = new Pessoa;

$joao->nome = 'João';
$joao->sobrenome = 'Pessoa';

var_dump($joao);