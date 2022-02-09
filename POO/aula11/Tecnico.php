<?php

require_once 'Aluno.php';

class Tecnico extends Aluno {
    //Atributos
    private $registroProfissional;

    public function praticar() {
        echo "<p>O aluno <strong>$this->nome</strong> está praticando.</p>";
    }


    //Métodos Especiais
    public function getRegistroProfissional() {
        return $this->bolsa;
    }

    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }
}