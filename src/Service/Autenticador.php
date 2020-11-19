<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador {

    public function tentaLogin(Diretor $diretor, $senha) {
        if($diretor->podeAutenticar($senha)){
            echo "Ok. Usuário logado no Sistema";
        } else {
            echo "Senha incorreta";
        }
    }


}