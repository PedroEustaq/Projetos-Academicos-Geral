<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes() {
        echo "<p><br>TITULO:". $this->titulo;
        echo "<br>AUTOR:". $this->autor;
        echo "<br>PAGINA ATUAL:" . $this->pagAtual;
        echo "<br>TOTAL DE PAGINAS:" . $this->totPaginas;
        echo "<br>ESTA ABERTO?:" . $this->aberto;
        echo "<br>LEITOR:" . $this->leitor . "</p>";
    }
    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $lor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
        $this->leitor = $lor->getNome();
    }

    #[\Override]
    public function abrir() {
        $this->aberto = true;
    }

    #[\Override]
    public function avançarPag() {
        $this->pagAtual = $this->pagAtual + 1;
    }

    #[\Override]
    public function fechar() {
        $this->aberto = false;
        
    }

    #[\Override]
    public function folhear($r) {
        $this->pagAtual = $this->pagAtual + $r;
        if ($this->pagAtual > $this->totPaginas) {
            $this->pagAtual = 0;
        }
    }

    #[\Override]
    public function voltarPag() {
        
    }
}
