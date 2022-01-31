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
    $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    $media = ($nota1 + $nota2) / 2;
    echo "A média entre $nota1 e $nota2 é $media. <br/>";
    if ($media < 5) {
      $situacao = "REPROVADO";
    } else if ($media >5 && $media < 7) {
      $situacao = "RECUPERAÇÃO";
    } else {
      $situacao = "APROVADO";
    }
    echo "Situação do aluno: $situacao";
    ?>
    <a href="exercicioEscola.html">Voltar</a>
  </div>
</body>

</html>