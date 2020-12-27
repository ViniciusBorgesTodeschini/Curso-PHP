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
            $frase = "Eu vou estudar PHP";
            $cont = str_word_count($frase,0);
            echo $cont;
         ?>
    </div>
</body>
</html>