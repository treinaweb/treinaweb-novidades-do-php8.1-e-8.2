<?php

class Transacao
{
    final public const TEMPO_LIMITE = 20;
}

class Pedido extends Transacao
{
}

echo Pedido::TEMPO_LIMITE;