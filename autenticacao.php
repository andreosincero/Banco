<?php

require_once 'autoload.php';
// require_once 'src//Service//Autenticador.php';
// require_once 'src//Modelo//Funcionario//Diretor.php';
use Andre\Banco\Modelo\Funcionario\Diretor;
use Andre\Banco\Modelo\CPF;
use Andre\Banco\Service\Autenticador;


$autenticado = new Autenticador();
$umDiretor = new Diretor(
  nome: "João Carlos",
  cpf: new CPF (numero: '304.285.093-99'),
  salario: 10000.0
);

$autenticado->tentarLogin($umDiretor,'4321');
// $umDiretor->nome = "JOOOOO";