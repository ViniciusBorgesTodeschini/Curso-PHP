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
        <pre>
            <?php 
                $m = array( array(6,4),
                            array (4,9),
                            array (3,2)
                );
                $m [0] [1] = 3;
                print_r($m);
            ?>
        </pre>   
    </div>
</body>
</html>