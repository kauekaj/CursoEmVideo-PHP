<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Aula 10 - POO</title>
</head>

<body>
  <pre>
    <h1>Exercício de Herança</h1>
    <?php

      require_once 'Pessoa.php';
      require_once 'Visitante.php';
      require_once 'Aluno.php';
      require_once 'Bolsista.php';
      require_once 'Tecnico.php';
      require_once 'Professor.php';

      //Programa Principal

      $v1 = new Visitante();
      $a1 = new Aluno();
      $b1 = new Bolsista();      

      // $v1->setNome("Juvenal");
      // $v1->setIdade("30");
      // $v1->setSexo("M");

      $a1->setNome("Pedro");
      $a1->setMatr(1111);
      $a1->setIdade(16);
      $a1->setSexo("M");
      $a1->setCurso("Informática");
      $a1->pagarMensalidade();

      
      print_r($a1);

      $b1->setNome("Jubileu");
      $b1->setMatr(1112);
      $b1->setIdade(17);
      $b1->setSexo("M");
      $b1->setCurso("Engenharia");
      $b1->setBolsa(12.5);
      $b1->pagarMensalidade();
     
     

 
      print_r($b1);

    ?>
  </pre>
</body>

</html>