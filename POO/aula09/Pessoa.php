<?php


class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    //Métodos
    public function fazerNiver() {
        $this->idade ++;  
    }


    //Métodos Especiais

    public function __construct($no, $id, $se) {
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $se;

    }


    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}
  
                   