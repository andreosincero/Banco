<?php

require_once 'autoload.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/Pessoa.php';
use Andre\Banco\Modelo\Conta\Titular;
use Andre\Banco\Modelo\Endereco;
use Andre\Banco\Modelo\CPF;
use Andre\Banco\Modelo\Pessoa;
use Andre\Banco\Modelo\Conta\Conta;
use Andre\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

// $patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
// $segundaConta = new Conta($patricia);
// var_dump($segundaConta);

// $outroEndereco = new Endereco('A', 'b', 'c', '1D');
// $outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
// unset($segundaConta);
// echo Conta::recuperaNumeroDeContas();
// $eu = new Titular(new CPF('066.942.234-10'), 'André', new Endereco("","","",""));
// var_dump($eu->recuperaCpf());