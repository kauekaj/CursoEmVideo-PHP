<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
  </style>
</head>

<body>
  <div>
    <?php
      $n = isset($_GET["num"])?$_GET["num"]:1;
      for ($c=1;$c <=10;$c++) {
        $r = $n * $c;
        echo "$n x $c = $r <br/>";
      }
    ?>
    <p><a href="exercicio09.php" class="botao">Voltar</a></p>
  </div>
</body>

</html>