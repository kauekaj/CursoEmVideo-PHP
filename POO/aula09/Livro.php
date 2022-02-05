<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {

    // Atributos

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

     //Métodos
    
    public function detalhes() {
        echo "<hr> Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
        echo "<br> Sendo lido por " . $this->leitor->getNome();

    }

    
    //Métodos Especiais

    public function __construct($ti, $au, $tp, $le) {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $tp;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $le;

    }

    
    public function getTitulo() {
        return $this->getTitulo;
    }
    
    public function setTitulo($titulo) {
        $this->getTitulo = $titulo;
    }

    public function getAutor() {
        return $this->getAutor;
    }

    public function setAutor($autor) {
        $this->getAutor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->getTotPaginas = $totPaginas;
    }

    public function getPaginaAtual() {
        return $this->paginaAtual;
    }

    public function setPaginaAtual($paginaAtual) {
        $this->paginaAtual = $paginaAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }
    
    public function voltarPag() {
        $this->pagAtual ++;
    }
    


}
  
