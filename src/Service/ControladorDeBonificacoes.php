<?php

namespace Andre\Banco\Service;

use Andre\Banco\Modelo\Funcionario\Funcionario;
class ControladorDeBonificacoes
{
  private float $totalBonificacoes = 0;

  // Getters
  public function recuperarTotal()
  {
    return $this->totalBonificacoes;
  }

  // Métodos
  public function adicionarBonificacaoDe(Funcionario $funcionario)
  {
    $this->totalBonificacoes += $funcionario->calcularBonificacao();
  }
}