<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Aula 15 - Projeto Final - Parte 2 - POO</title>
</head>

<body>
  <pre>
    <h1>Projeto Final - Parte 2</h1>
    <?php

      require_once 'Pessoa.php';
      require_once 'Video.php';
      require_once 'Gafanhoto.php';    
      require_once 'Visualizacao.php';    

      //Programa Principal
     
      $v[0] = new video("Aula 1 de POO");
      $v[1] = new video("Aula 8 de Javascript");
      $v[2] = new video("Aula 5 de CSS");
      
      $g[0] = new Gafanhoto("Kauê", 33, "M", "kaj");
      $g[1] = new Gafanhoto("Laura", 29, "F", "lbp");

      $vis[0] = new Visualizacao($g[0], $v[2]);
      $vis[1] = new Visualizacao($g[0], $v[1]);

      $vis[0]->avaliar();
      $vis[1]->avaliarPorc(85);
      print_r($vis);
     
  
      
    ?>
  </pre>
</body>

</html>