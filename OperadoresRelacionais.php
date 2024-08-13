<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  

        //IGUAL (==)

        $a = 18;  
        $b = 10;  

        if ($a == $b) {  
            echo "$a é igual a $b";  
        } else {  
            echo "$a não é igual a $b";  
        }  

        //DIFERENTE (!= OU <>)

        $a = 5;  
        $b = 10;  

        if ($a != $b) {  
        echo "$a é diferente de $b";  
        } else {  
        echo "$a é igual a $b";  
        } 

        //MAIOR QUE (>)

        $a = 13;  
        $b = 14;  

        if ($a > $b) {  
        echo "$a é maior do que $b";  
        } else {  
        echo "$a não é maior do que $b";  
        }  

        //MAIOR OU IGUAL QUE (>=)

        $a = 10;  
        $b = 10;  

        if ($a != $b) {  
        echo "$a é maior ou igual a $b";  
        } else {  
        echo "$a não é maior ou igual a $b";  
        }  

        //MENOR QUE (<)

        $a = 5;  
        $b = 10;  

        if ($a < $b) {  
        echo "$a é menor do que $b";  
        } else {  
        echo "$a não é menor do que $b";  
        }
        
        //MENOR OU IGUAL QUE (<=)

        $a = 10;  
        $b = 10;  

        if ($a == $b) {  
         echo "$a é igual a $b";  
        } else {  
        echo "$a não é igual a $b";  
        }  

        //COMBINANDO OPERADORES RELACIONAIS >= &&

        $idade = 15;  
        $somenteCertaHistorista = true;  

        if ($idade >= 18 && $somenteCertaHistorista) {  
        echo "Pode dirigir.";  
        } else {  
        echo "Não pode dirigir.";  
        }  
?>  
</body>
</html>