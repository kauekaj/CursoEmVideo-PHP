<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <pre>
      <?php
        $m = array("A", "B", "C", "D", "E");
        print_r($m);
        //Colocando elemento no final do vetor
        $m[] = "F";
        print_r($m);
      ?>
    </pre>
  </div>
</body>

</html>