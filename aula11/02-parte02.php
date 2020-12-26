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
            $i =1;
            while ($i <=5) {
                $v = "num".$i;
                $resp = "v".$i;
                $$v = isset($_GET["$resp"])?$_GET["$resp"]:0;
                $i++;
            }

            $i =1;
            while ($i <=5) {
                $v = "num".$i;
                echo "valor $i : " . $$v . "<br>";
                $i++;
            }
         ?>
    </div>
</body>
</html>