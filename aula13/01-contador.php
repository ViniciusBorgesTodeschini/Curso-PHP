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
            for ($i = 1; $i <= 10; $i++){
                echo "$i ";
            }
            echo "<br>";
            for ($i = 10; $i >= 1; $i--){
                echo "$i ";
            }
            echo "<br>";
            for ($i = 0; $i <= 50 ;$i += 5){
                echo "$i ";
            }
         ?>
    </div>
</body>
</html>