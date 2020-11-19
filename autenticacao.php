<?php 

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';    

$autenticador  = new Autenticador();
$umDiretor = new Diretor(
    'Ozzymandias',
    new CPF('141.414.141-41'),
    10000
);

$autenticador->tentaLogin($umDiretor, '1234');