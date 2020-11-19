<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel{

    public function calculaBonificacao()
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar($senha) {
        return '1234'=== $senha;
    }


}
