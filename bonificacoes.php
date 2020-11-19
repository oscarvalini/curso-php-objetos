<?php

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Oscar Valini',
    new CPF('123.456.789-10'),
    5000);

$umaFuncionaria = new Gerente(
    'Diana Soares',
    new CPF('123.456.789-11'),
    7000
);

$umDiretor = new Diretor(
    'Kratos',
    new CPF('987.654.321-10'),
    10000 //10 mil
);

$umEditor = new EditorVideo(
    'Gaveta',
    new CPF('131.313.131-31'),
    15000
);

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
