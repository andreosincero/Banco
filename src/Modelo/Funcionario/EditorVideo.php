<?php

namespace Andre\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
  public function calcularBonificacao(): float
  {
    return 100.0;
  }
}