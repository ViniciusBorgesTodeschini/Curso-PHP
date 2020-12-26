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
            function soma($a, $b){
                return $a + $b;
            }
            $x = 9;
            $y = 15;
            $r = soma ($x, $y);
            echo "A soma entre $x e $y é igual a $r";
         ?>
    </div>
</body>
</html>