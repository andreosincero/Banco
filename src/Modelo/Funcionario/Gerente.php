<?php

namespace Andre\Banco\Modelo\Funcionario;

use Andre\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
  // Métodos
  public function calcularBonificacao(): float
  {
    return $this->recuperarSalario();
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === "4321";
  }
}