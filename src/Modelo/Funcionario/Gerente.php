<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario{

    public function calculaBonificacao()
    {
        return $this->recuperaSalario();
    }


}
