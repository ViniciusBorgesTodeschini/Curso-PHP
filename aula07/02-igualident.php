<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Igual e Identico</title>
</head>
<body>
    <div>
        <?php 
            $a = 3;
            $b = "3";
            $r = ($a == $b)?"SIM":"NAO";
            echo "Operador igual: As variveis A e B são iguas? $r <br/>";
            $res = ($a === $b)?"SIM":"NAO";
            echo "Operador identico: As variveis A e B são iguas? $res <br/>";
         ?>
    </div>
</body>
</html>