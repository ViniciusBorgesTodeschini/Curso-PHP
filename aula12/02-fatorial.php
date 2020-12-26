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
            $v = isset($_GET["val"])?$_GET["val"]:1;;
            echo "<h1>Calculando o fatorial de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat *= $c;
                $c --;
            } while ($c >= 1);
            echo "<h2>$v ! = $fat";
         ?>
         <a href="02-fatorial.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>