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
            function teste(&$x) {
                $x += 2;
                echo "O valor de X é $x";
            }

            $a =3;
            teste($a);
            echo "<p>O valor de A é $a</p>";
         ?>
    </div>
</body>
</html>