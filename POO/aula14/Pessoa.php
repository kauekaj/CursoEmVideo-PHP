<?php

    abstract class Pessoa {

    // Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    //Métodos
    protected function ganharExp($exp) {
        $this->experiencia += $exp;
    }
        
    //Métodos Especiais

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }    

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->nome;
    }

    public function getExperiencia() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
}