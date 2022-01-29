<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[nao encontrado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[nao encontrado]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[nao encontrado]";
 
        $idade = date("Y") - $ano;
        echo "$nome tem $idade anos e e $sexo.";
    ?>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>
 