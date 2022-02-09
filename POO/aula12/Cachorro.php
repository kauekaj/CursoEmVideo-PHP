<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {


    public function enterrarOsso() {
        echo "<p>Enterando osso!/p>";
    }
    
    public function abanarRabo() {
        echo "<p>Abanando o rabo</p>";
    }

    public function emitirSom() {
        echo "<p>Au!Au!Au!</p>";
    }

}