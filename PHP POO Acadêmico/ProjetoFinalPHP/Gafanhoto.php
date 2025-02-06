<?php
require_once"Pessoa.php";
class Gafanhoto extends Pessoa {

    private $login;
    private $totAssistido;
    

    public function __construct($login,$nome, $idade, $sexo) {
        $this->login = $login;
        $this->totAssistido = 0;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    public function viuMaisUm() {
        
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }


}
