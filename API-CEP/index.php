<?php

require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIA
use \App\WebService\ViaCEP;

//VERIFICA A EXISTÊNCIA DO CEP NO COMANDO

if(!isset($argv[1])){
    die("CEP não definido\n");
}

//EXECUTA A CONSULTA DE CEPS
$dadosCEP = ViaCEP::consultarCEP($argv[1]);

// IMPRIME O RESULTADO
print_r($dadosCEP);