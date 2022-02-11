<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Aula 14 - Projeto Final - POO</title>
</head>

<body>
  <pre>
    <h1>Projeto Final</h1>
    <?php

      require_once 'Pessoa.php';
      require_once 'Video.php';
      require_once 'Gafanhoto.php';    

      //Programa Principal
     
      $v[0] = new video("Aula 1 de POO");
      $v[1] = new video("Aula 2 de POO");
      $v[2] = new video("Aula 3 de POO");
      
      $g[0] = new Gafanhoto("Kauê", 33, "M", "kaj");

      print_r($v);
      print_r($g);
     
  
      
    ?>
  </pre>
</body>

</html>