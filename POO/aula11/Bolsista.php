<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {
    //Atributos
    private $bolsa;

    //Métodos
    public function renovarBolsa() {
        echo "<p>Bolsa renovada.</p>";
    }

    
    public function pagarMensalidade() {
        echo "<p><strong>$this->nome</strong> é bolsista, então paga com desconto!</p>";
    }


    //Métodos Especiais
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

} 