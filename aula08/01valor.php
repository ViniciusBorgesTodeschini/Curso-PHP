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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raíz quadrada de $valor é ". number_format($rq,2);
         ?>
         <a href="01exercicio.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>