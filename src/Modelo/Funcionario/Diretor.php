<?php

namespace Andre\Banco\Modelo\Funcionario;

use Andre\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
  // Métodos
  public function calcularBonificacao(): float
  {
    return $this->recuperarSalario() * 2;
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '1234';
  } 
}