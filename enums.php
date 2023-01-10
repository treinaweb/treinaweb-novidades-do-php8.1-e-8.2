<?php

enum Status
{
    case Pendente;
    case Pago;
    case Cancelado;
}

class Transacao
{
    public Status $status;
}

$transacao1 = new Transacao;
$transacao1->status = Status::Cancelado;

if ($transacao1->status === Status::Pendente) {
    echo "Transação pendente";
}
