<?php

spl_autoload_register(function($nomeCompletoDaClasse){
    echo $nomeCompletoDaClasse;
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    echo $caminhoArquivo;

    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$vinicius = new Titular(
    new CPF('123.456.789-10'), 
    'Vinicius Dias', 
    new Endereco('Indaiatuba', 'Jardim Morada do Sol', 'Rua Custódio Candido Carneiro', '262')
);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(
    new CPF('698.549.548-10'), 
    'Patricia',
    new Endereco('São Paulo', 'Bandeirantes', 'Rua 25 de Março', '400')
);
$segundaConta = new ContaPoupanca($patricia);
var_dump($segundaConta);

$outra = new ContaCorrente(
    new Titular(
        new CPF('123.654.789-01'),
        'Abcdefg',
        new Endereco('abcde', 'abcd', 'abc', 'ab')
    )   
);
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
