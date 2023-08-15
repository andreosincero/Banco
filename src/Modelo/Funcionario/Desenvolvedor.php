<?php

namespace Andre\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
  // Métodos
  public function sobeDeNivel()
  {
    $this->receberAumento($this->recuperarSalario() * 0.75);
  }

  public function calcularBonificacao(): float
  {
    return 500.0;
  }
}