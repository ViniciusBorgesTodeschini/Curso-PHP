<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"$000000";
    ?>
        <style>
            span.texto{
                font-size: <?php echo $tam;?>;
                color: <?php echo $cor;?>;
            }
        </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
         ?>
         <a href="03exercicio.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>