<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //ARRAY SIMPLES

        $numeros = array(1, 2, 3, 4, 5);
        
        echo $numeros[0] . "<br>";
        echo $numeros[1] . "<br>";
        echo $numeros[2] . "<br>";

        //SINTAXE ALTERNATIVA

        $numeros = [1, 2, 3, 4, 5];

        echo $numeros[0] . "<br>";
        echo $numeros[1] . "<br>";

        //PRINTR X ECHO

        $dados = ["nome" => "Diogo", "idade" => 18];

        echo "Nome: " . $dados["nome"] . ", Idade: " . $dados["idade"];
        echo "<pre>";
        print_r($dados);
        echo "</pre>";

        //ARRAY ASSOCIATIVO

        $pessoa = array(
            "nome" => "Aluno",
            "idade" => 28,
            "instituicao" => "FMP"
        );

        echo $pessoa["nome"];

        //ALTERANDO O VALOR DA CHAVE DO ARRAY

        $pessoa = array(
            "nome" => "João",
            "cpf" => "123.456.789-00",
            "email" => "joao@exemplo.com",
        );

        echo $pessoa["nome"];
        echo $pessoa["cpf"];
        echo $pessoa["email"];

        $pessoa["nome"] = "Roberto";
        $pessoa["cpf"] = "987.654.321-00";
        $pessoa["email"] = "roberto@exemplo.com";

        echo $pessoa["nome"];
        echo $pessoa["cpf"];
        echo $pessoa["email"];

        //PERCORRENDO ARRAYS

        $letras = ["A", "B", "C", "D", "E", "F", "G"];

        for($i = 0; $i <3; $i++) {

            echo $letras[$i] . " ";
        
        }

        //USANDO FOREACH

        $numeros = [1, 2, 3, 4, 5];

        foreach ($numeros as $numero) {

            echo $numero . " ";

        }

        //FUNÇÃO DE ARRAY ÚTEIS

        $array = ["Faculdade", "Municipal", "Palhoça", "-", "A", "D", "S"];

        $numeroElementos = count($array);

        echo "O array contém " . $numeroElemntos . " elementos.";

        //array_push($array, $valor)

        $array = ["PHP", "HTML", "JavaScript"];

        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . "<br>";
        }
        
        echo "Adiciona um elemento ao final do array usando a função array_push()<br>";
        $valor = "Python";
        array_push($array, $valor);

        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . "<br>";
        }

        //array_pop($array)

        $array = ["PHP", "HTML", "JavaScript"];  

        for ($i = 0; $i < count($array); $i++) {  
        echo $array[$i] . "<br>";  
        }  

        echo "Remueve y retorna el último elemento del array usando la función array_pop() <br>";  
        $ultimoElemento = array_pop($array);  
        echo "Último elemento removido: " . $ultimoElemento . "<br>";  
 
        foreach ($array as $elemento) {  
        echo $elemento . "<br>";  
        }  

        //array_merge($array1, $array2)
 
        $array1 = ["PHP", "HTML", "JavaScript"];  
        $array2 = ["Python", "Java", "C++"];  
  
        for ($i = 0; $i < count($array1); $i++) {  
        echo $array1[$i] . "<br>";  
        }  
 
        for ($i = 0; $i < count($array2); $i++) {  
        echo $array2[$i] . "<br>";  
        }  

        echo "Combina ambos arrays usando la función array_merge()<br>";  
        $combinedArray = array_merge($array1, $array2);  
        foreach ($combinedArray as $element) {  
        echo $element . "<br>";  
        }
        
        //ARRAY MULTIDIMENSIONAL

        $matrix1 = [  
        [1, 2, 3],  
        [4, 5, 6],  
        [7, 8, 9]  
        ];  

        echo $matrix1[1][2];

        $matrix2 = [  
        ["Python", "Java", "C++"],  
        ["JavaScript", "Ruby", "PHP"],  
        ["HTML", "CSS", "SQL"] 
        ];

        echo $matrix2[0][1]; 

        //PRINTR NA MATRIZ

        $matriz = [  
        ["Maçã", "Banana", "Cereja"],  
        ["Laranja", "Uva", "Pera"],  
        ["Abacaxi", "Laranja", "Melancia"]  
        ];  

        echo $matriz[1][2];

        echo "<pre>";  
        print_r($matriz);  
        echo "</pre>";  

        //PERCORRENDO ARRAY MULTIDIMENSIONAL   
        
        $matriz = [  
            ["Python", "Java", "C++"],  
            ["JavaScript", "Ruby", "PHP"],  
            ["Swift", "Kotlin", "C#"]  
        ];  
        
        for ($linha = 0; $linha < count($matriz); $linha++) {  
            for ($coluna = 0; $coluna < count($matriz[$linha]); $coluna++) {  
                echo $matriz[$linha][$coluna];  
            }  
            echo '<br>';  
        }  

        ?>
</body>
</html>