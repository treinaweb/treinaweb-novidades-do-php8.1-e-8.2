<?php

interface TemNome
{
    public function getNome();
}

interface TemSobrenome
{
    public function getSobrenome();
}

class Pessoa implements TemNome, TemSobrenome
{
    public function __construct(
        public readonly string $nome,
        public readonly string $sobreNome
    )
    {}

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobreNome;
    }
}

function ImprimeDadosPessoa(TemNome&TemSobrenome $pessoa)
{
    echo "Nome: " . $pessoa->getNome();
    echo "<br>";
    echo "Sobrenome: " . $pessoa->getSobrenome();
}

$joao = new Pessoa('João', 'Pessoa');

echo ImprimeDadosPessoa($joao);