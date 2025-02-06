<?php
require_once'Pessoa.php';
class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    
    
    public function mudarTrabalho() {
        echo "Um Funcionário mudou seu trabalho \n";
}
public function getSetor() {
    return $this->setor;
}

public function getTrabalhando() {
    return $this->trabalhando;
}

public function setSetor($setor): void {
    $this->setor = $setor;
}

public function setTrabalhando($trabalhando): void {
    $this->trabalhando = $trabalhando;
}


}
