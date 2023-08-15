<?php

namespace Andre\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
