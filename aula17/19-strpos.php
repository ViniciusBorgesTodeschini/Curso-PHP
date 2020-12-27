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
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo $frase . "<br>";
            echo "A string foi encontrada na posição $pos";
         ?>
    </div>
</body>
</html>