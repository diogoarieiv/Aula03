<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  

        //AND

        $idade = 25;  
        $itemPermissao = true;  

        if ($idade >= 18 && $itemPermissao) {  
            echo "Pode entrar na festa!";  
        } else {  
            echo "Não pode entrar na festa!";  
        }  

        //OR

        $itemIngressos = false;  

        if ($itemIngressos || $itemConvite) {  
            echo "Pode entrar na festa!";  
        } else {  
            echo "Não pode entrar na festa!";  
        }  

        //NOT

        $usuarioLogado = false;  

        if (!$usuarioLogado) {  
            echo "Por favor, faça o login para continuar.";  
        }  

        //USO DE PARENTESES

        $idade = 20;  
        $itemAutorizacao = true;  
        $itemPermissao = true;  

        if ($idade >= 18 && $itemAutorizacao || $itemPermissao) {  
            echo "Pode acessar o conteúdo restrito.";  
        } else {  
            echo "Não pode acessar o conteúdo restrito.";  
        }  

?>
</body>
</html>