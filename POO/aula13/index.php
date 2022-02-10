<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Aula 13 - Polimorfismo Parte 2 - POO</title>
</head>

<body>
  <pre>
    <h1>Exercício de Polimorfismo parte 2</h1>
    <?php

      require_once 'Mamifero.php';
      require_once 'Lobo.php';
      require_once 'Cachorro.php';    

      //Programa Principal
     
      $m = new Mamifero();
      $l = new Lobo();
      $c = new Cachorro();
     
      $m->emitirSom();
      $l->emitirSom();
      $c->emitirSom();

      $c->reagirFrase("Olá");      
      $c->reagirFrase("Vai Apanhar!");      
      $c->reagirHora(11, 45);      
      $c->reagirHora(21, 00);      
      $c->reagirDono(true);      
      $c->reagirDono(false);      
      $c->reagirIdadePeso(2, 12.5);      
      $c->reagirIdadePeso(17, 4.5);      
      

      
    ?>
  </pre>
</body>

</html>