<?php

namespace Andre\Banco\Service;

use Andre\Banco\Modelo\Autenticavel;

class Autenticador
{
  public function tentarLogin(Autenticavel $autenticavel, string $senha): void
  {
    if ($autenticavel->podeAutenticar($senha)){
      echo "Os. Usuário logado no sistema.";
      return;
    }
    echo "Ops. Senha incorreta.";
  }
}