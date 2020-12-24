<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Média do Aluno</title>
</head>
<body>
    <div>
        <?php 
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2)/2;
            echo "A média entre $nota1 e $nota2 é $m <br/>";
            /* $sit = ($m<6)?"REPROVADO!":"APROVADO!";
            echo "A situação do aluno é $sit"; */ //Método convencional
            echo "A situação do aluno é ".(($m<6)?"REPROVADO!":"APROVADO!"); //método resumido
         ?>
    </div>
</body>
</html>