<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Aula 04 - POO</title>
</head>

<body>
  <div>
    <pre>
    <?php
      require_once 'Caneta.php';
      $c1 = new Caneta("BIC", "Vermelha", 0.5);
      print_r($c1);  
    ?>
    </pre>
  </div>
</body>

</html>