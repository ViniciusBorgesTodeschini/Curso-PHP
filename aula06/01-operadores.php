<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $preco = $_GET["p"];
            echo"O preço do produto é R$ ". number_format($preco,2,",",".");
            $preco += ($preco*0.1);
            echo"<br/>O novo preço com 10% de aumento será de ". number_format($preco,2,",",".");
         ?>
    </div>
</body>
</html>