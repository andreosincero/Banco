<?php

namespace Andre\Banco\Modelo\Funcionario;

use Andre\Banco\Modelo\{CPF,Pessoa};

abstract class Funcionario extends Pessoa
{

  public function __construct(
    string $nome,
    CPF $cpf,
    // private string $cargo,
    private float $salario,
    ){
    parent::__construct($nome, $cpf);
  }

  // Getters
  public function recuperarSalario(): float
  {
    return $this->salario;
  }
  
  //Métodos
  public function alterarNome(string $nome): void
  {
    $this->validaNome($nome);
    $this->nome = $nome;
  }
  
  protected function receberAumento(float $valorAumento): void
  {
    if ($valorAumento < 0){
      echo "Aumento deve ser positivo";
      return;
    }
    $this->salario += $valorAumento;
  }

  abstract public function calcularBonificacao(): float;
}