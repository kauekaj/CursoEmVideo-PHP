<?php
    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo  {

    // Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

 
    //Métodos Especiais

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    //Métodos da Interface
    public function play() {
        $this->curtidas ++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }
     
    public function like() {
        $this->reproduzindo = true;
    } 


}