<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $numero = $_GET["n"];
        echo "Mostrando a tabuada de $numero<br>";
        $c = 1;
        do {
          $r = $numero * $c;
          echo "$numero x $c = $r<br>";
          $c++;
        }while($c < 11);
    ?>
</div>
</body>
</html>
 