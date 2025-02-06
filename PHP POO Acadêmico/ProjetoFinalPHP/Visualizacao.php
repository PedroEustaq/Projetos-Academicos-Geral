<?php
require_once'Gafanhoto.php';
require_once'Video.php';
class Visualizacao {

    private $espectador;
    private $filme;
    
    
    public function __construct($gafanhoto, $video) {
        $this->espectador = $gafanhoto;
        $this->filme = $video;
    }

    
    public function avaliarPadrao() {
        if ($this->filme->getReproduzindo()) {
        $this->filme->setAvaliacoes($this->filme->getAvaliacoes() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    }
    public function avaliarNota($n) {
        if ($n > 10) {
            $n = 10;
        } elseif ($n <0) {
            $n=0;
        }
        if ($this->filme->getReproduzindo()) {
            
        
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->filme->setAvaliacoes($this->filme->getAvaliacoes() + $n);
    }
        
    }
    public function avaliarPorc($n) {
        if ($n > 100) {
            $n = 100;
        } elseif ($n <0) {
            $n=0;
        }
        if ($this->filme->getReproduzindo()) {
            
        
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->filme->setAvaliacoes($this->filme->getAvaliacoes() + $n);
    }
    }
}
