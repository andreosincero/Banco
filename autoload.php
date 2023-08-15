<?php

// https://www.php-fig.org/psr/psr-4/

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Andre\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

// spl_autoload_register(function(string $nomeCompletoDaClasse) {

//     echo $nomeCompletoDaClasse . PHP_EOL;

//     $caminhoArquivo = str_replace('Andre\\Banco', 'src', $nomeCompletoDaClasse);

//     echo $caminhoArquivo . PHP_EOL;

//     $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);

//     echo $caminhoArquivo . PHP_EOL;

//     $caminhoArquivo .= '.php';

//     echo $caminhoArquivo . PHP_EOL;
//     exit();

//     if(file_exists($caminhoArquivo)){
//         require_once $caminhoArquivo;

//     }

// });