<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        //IF

        $nota = 85;  
        if ($nota >= 60) {  
        echo "Você passou no exame.";  
        }  

        //ELSE

        $tempo = "Chuvoso";  
        if ($tempo == "ensolarado") {  
        echo "Vamo's pra praia!";  
        } else {  
        echo "Melhor ficar em casa hoje.";  
        }  

        //ELSE IF

        $idade = 0;  
        if ($idade < 0) {  
        echo "Parabéns, você foi uma ótima escolha!";  
        } elseif ($idade >= 18) {  
        echo "Você já é maior.";  
        } else {  
        echo "Você ainda não é maior.";  
        }  

        $idade = 75;  
        if ($idade < 10) {  
        echo "Criança.";  
        } elseif ($idade < 20) {  
        echo "Adolescente.";  
        } elseif ($idade < 60) {  
        echo "Adulto.";  
        } else {  
        echo "Você é um lindo idoso para a próxima vida.";  
        }  

        //OPERADORES DE COMPARAÇÃO

        $numero = 7;  
        if ($numero % 2 == 0) {  
        echo "$numero é um número par.";  
        } else {  
        echo "$numero é um número ímpar.";  
        }  

        $name = "Alice";  
        if ($name == "Bob") {  
        echo "Olá, Bob!";  
        } else {  
        echo "Olá, $name!";  
        }  

        //ESTRUTURAS CONDICIONAIS ANINHADAS

        $idade = 22;  
        if ($idade >= 18) {  
        if ($idade < 21) {  
        echo "Você é um adulto jovem.";  
        } else {  
        echo "Você é um adulto.";  
        }  
        } else {  
        echo "Você é menor de idade.";  
        }  

        $signIn = true; // tentativa de login válida  
        $idade = 22;  

        if ($signIn) {  
        if ($idade >= 18) {  
        if ($idade < 21) {  
        echo "Bem-vindo, adulto jovem!";  
        } else {  
        echo "Bem-vindo, adulto!";  
        }  
        } else {  
        echo "Acesso negado, você é menor de idade.";  
        }  
        } else {  
        echo "Acesso negado, login inválido.";  
        }  
    ?>  
</body>
</html>