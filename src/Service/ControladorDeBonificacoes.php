<?php

namespace Alura\Banco\Service;

class controladorDeBonificacoes {

    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe($funcionario){
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal() {
        return $this->totalBonificacoes;
    }

}