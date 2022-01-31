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
      <table border="1"><tr>
    <?php    
      $c = range(0,30,6);
      foreach ($c as $v) {
        echo "<td> $v ";
      }
    ?>
    </table>
    </pre>
  </div>
</body>

</html>