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
            $t = "Aqui temos um texto gigante criado pelo PHP para fazer o teste de uma variavel de quebra de linhas e bla bla bla bla.";
            $r = wordwrap($t,5, "<br>\n", false);
            echo $r;
         ?>
    </div>
</body>
</html>