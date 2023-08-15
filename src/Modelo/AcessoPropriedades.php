<?php

namespace Andre\Banco\Modelo;

trait AcessoPropriedades
{
  public function __get(string $nomeDoAtributo)
  {
    $nomeDoAtributo = "recuperar" . ucfirst($nomeDoAtributo);
    // echo $nomeDoAtributo;
    return $this->$nomeDoAtributo();
  }
}