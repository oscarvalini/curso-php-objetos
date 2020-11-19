<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;

require_once 'src/Modelo/Pessoa.php';

abstract class Funcionario extends Pessoa{

    private $salario;

    public function __construct($nome, $cpf, $salario){
        
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome($nome) {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento($valor) {
        if($valor < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valor;
    }

    public function recuperaSalario() {
        return $this->salario;
    }

    abstract public function calculaBonificacao();

    public function podeAutenticar($senha){
        return $senha == '4321';
    }

}

?>