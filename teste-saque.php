<?php

require_once 'autoload.php';

use Andre\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Andre\Banco\Modelo\{CPF, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();
