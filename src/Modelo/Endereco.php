<?php

namespace Andre\Banco\Modelo;

/**
 * @package Amdre\Banco\Modelo
//  * @property-read string $cidade
//  * @property-read string $bairro
//  * @property-read string $rua
//  * @property-read string $numero
 */

final class Endereco {
  
  use AcessoPropriedades;
  
  // Construct propotion
  public function __construct(
    
    private string $cidade,
    private string $bairro,
    private string $rua,
    private string $numero,
  ){
  }

  // Getters
  public function recuperarCidade(): string
  {
    return $this->cidade;
  }
  public function recuperarBairro(): string
  {
    return $this->bairro;
  }

  public function recuperarRua(): string
  {
    return $this->rua;
  }
  
  public function recuperarNumero(): string
  {
    return $this->numero;
  }
  
  //
  public function alterarCidade(string $novaCidade){
    $this->cidade = $novaCidade;
  }

  public function alterarBairro(string $novoBairro){
    $this->bairro = $novoBairro; 
  }
  
  public function alterarRua(string $novaRua){
    $this->rua = $novaRua;
  }

  public function alterarNumero(string $novoNumero){
    $this->numero = $novoNumero;
  }

  // Métodos
  public function __toString(): string
  {
    return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
  }
  
  public function __set($nomeDoAtributo, $valor)
  {
    if (property_exists($this, $nomeDoAtributo)){
      echo "Atualizando {$nomeDoAtributo} para {$valor}" . PHP_EOL;
      $nomeDoAtributo = "alterar" . ucfirst($nomeDoAtributo);
      $this->$nomeDoAtributo($valor);
      return;
    }
    echo "Propriedade inexistente. Não é possível efetuar atualização.";
  }

}