<?php

require_once 'autoload.php';

use Andre\Banco\Modelo\Endereco;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

echo $endereco->rua . PHP_EOL;
$endereco->rua= "minha rua 2";
echo $endereco->rua . PHP_EOL;

