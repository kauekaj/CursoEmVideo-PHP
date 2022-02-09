<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {

    //Atributos
    private $matr;
    private $curso;

    //Métodos
    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno <strong>$this->nome</strong>.</p>";
    }

    //Métodos Especiais
    public function getMatr() {
        return $this->matr;
    }

    public function getcurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

}