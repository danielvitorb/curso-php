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
        $num = $_GET["n"];
        echo "Analisando o número $num ...<br>";
        echo "Valores múltiplos: "; 
        $m = 0;
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                echo "$i ";
                $m++;
            }
        }
        echo "<br>Total de múltiplos: $m<br>";
        echo "Resultado: $num ";
        if($m < 3){
            echo "É PRIMO!";
        } else {
            echo "NÃO É PRIMO!";
        }
    ?>
</div>
</body>
</html>
 