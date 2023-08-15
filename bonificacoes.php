<?php

require_once "autoload.php";

use Andre\Banco\Modelo\CPF;
use Andre\Banco\Modelo\Funcionario\Desenvolvedor;
use Andre\Banco\Modelo\Funcionario\Funcionario;
use Andre\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
   nome: "Andre",
   cpf: new CPf (numero: "066.981.103-37"),
   salario: 3000,
);

$umFuncionario->sobeDeNivel();