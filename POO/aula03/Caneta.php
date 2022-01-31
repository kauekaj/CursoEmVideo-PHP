<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    function rabiscar() {
        if  ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!<p/>";
        } else
        echo "<p>Estou rabiscando...<p/>";
    }

    function tampar() {
        $this->tampada = true;
    }
    
    function destampar() {
        $this->tampada = false;
    }

}