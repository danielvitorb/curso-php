<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>  
</head>
<body>
<div>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é ". number_format($preco, 2);
        $preco += $preco*10/100;
        echo "<br>E o novo preço com 10% de aumento será R$ ". number_format($preco, 2);
    ?>
</div>
</body>
</html>