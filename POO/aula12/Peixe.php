<?php

require_once 'Animal.php';

class Peixe extends Animal {

    //Atributos
    private $corEscama;

    //Métodos
    public function locomover() {
        echo "<p>Nadando</p>"; 
    }

    public function alimentar() {
        echo "<p>Comendo Substâncias</p>";
    }
    
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function soltarBolha() {
        echo "<p>Soltou uma bolha</p>";
    }

    //Métodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}