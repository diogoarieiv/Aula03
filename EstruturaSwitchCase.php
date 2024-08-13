<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //SINTAXE BASICA SWITCH CASE
        
        $setorAtendimento = "Quarta";  

        switch ($diaDaSemana()) {  
        case "Segunda":  
        echo "Hoje é segunda-feira.";  
        break;  
        case "Terça":  
        echo "Hoje é terça-feira.";  
        break;  
        case "Quarta":  
        echo "Hoje é quarta-feira.";  
        break;  
        default:  
        echo "Dia inválido.";  
        }         

        //SWITCH CASE E COMPARAÇÃO DE VALORES

        $nota = 8;  

        switch ($nota) {  
        case ($nota >= 7):  
        echo "Você está muito aprovado!";  
        break;  
        case ($nota >= 5):  
        echo "Você foi bem, mas pode melhorar.";  
        break;  
        default:  
        echo "Você precisa estudar mais para o próximo mês.";  
        }
        
        //SWITCH CASE COM OPERADORES RELACIONAL E LOGICO

        $hora = 18;  

        switch (true) {  
        case ($hora >= 6 && $hora < 12):  
        echo "Bom dia!";  
        break;  
        case ($hora >= 12 && $hora < 18):  
        echo "Boa tarde!";  
        break;  
        default:  
        echo "Boa noite!";  
        }  

    ?>
</body>
</html>