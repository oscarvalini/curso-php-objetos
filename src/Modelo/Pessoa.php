<?php

namespace Alura\Banco\Modelo;

class Pessoa {

    protected $nome;
    private $cpf;

    public function __construct($nome, $cpf)
    {   
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome() {
        return $this->nome;
    }

    public function recuperaCpf() {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome($nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}