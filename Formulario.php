   <?php  

    //FORMULARIO 

    $num1 = filter_input(INPUT_POST, "txtNumero1");  
    $num2 = filter_input(INPUT_POST, "txtNumero2");  
    
    $result = $num1 + $num2;  
    ?>  

    <!DOCTYPE html>  
    <html>  
    <head>  
        <title>Formulário PHP</title>  
    </head>  
    <body>  
        <h1>Exemplo de formulário PHP</h1>  
        <form method="post">  
            <label> Número 1: <input type="text" name="txtNumero1" /></label><br>  
            <label> Número 2: <input type="text" name="txtNumero2" /></label><br>  
            <input type="submit" name="btnCalcular" value="Calcular" />  
        </form>  
        <?php  
            echo $result;  
        ?>  

    </body>
    </html>

