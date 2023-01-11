<?php

trait Base
{
    public const TEMPO_LIMITE = 20;
}

class Transacao
{
    use Base;
}

echo Transacao::TEMPO_LIMITE;