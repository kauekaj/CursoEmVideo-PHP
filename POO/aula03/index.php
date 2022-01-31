<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Aula 03 - POO</title>
</head>

<body>
  <div>
    <?php
      require_once 'Caneta.php';
      $c1 = new Caneta;
      $c1->modelo = "BIC Cristal";
      $c1->cor = "Azul";
            
      var_dump($c1);
     
    ?>

  </div>
</body>

</html>