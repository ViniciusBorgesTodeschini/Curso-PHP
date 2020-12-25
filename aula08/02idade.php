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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:date("Y");
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[SEM SEXO]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos.";
         ?>
         <a href="02exercicio.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>