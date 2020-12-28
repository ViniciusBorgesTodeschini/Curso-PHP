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
                $v = array ( "nome" => "Ana", "idade" => 23, "peso" => 65.5);
                foreach ($v as $k => $c) {
                    echo "O campo <strong>$k</strong> possui o conteudo <strong>$c</strong> <br>";
                }   
            ?>
    </div>
</body>
</html>