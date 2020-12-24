<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variaveis de Variaveis</title>
</head>
<body>
    <div>
        <?php 
            $x = "abc";
            $$x = "def"; #Embora funcione, o próprio PHP acusa um erro a essa sintaxe.
            echo "O Contedudo da variavel X é $x";
            echo "<br/>A variavel ABC criada recebeu o valor $abc";
         ?>
    </div>
</body>
</html>