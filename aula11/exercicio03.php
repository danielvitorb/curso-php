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
    $inicio = $_GET["i"];
    $fim = $_GET["f"];
    $incremento = $_GET["in"];
    if($inicio < $fim){
        while($inicio <= $fim){
            echo "$inicio ";
            $inicio += $incremento;
        }
    } else {
        while($inicio >= $fim){
            echo "$inicio ";
            $inicio -= $incremento;
        }
    }
    
    ?>
</div>
</body>
</html>
 