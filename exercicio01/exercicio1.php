<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal</title>
</head>
<body>
    <header>
        <h1> Resultado </h1>
    </header>
    <main>
        <<?php 
        
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];

        //if()
        echo "<p> O número 1 é, $n1 e o 2 é $n2!! Este é o original";
        
        ?>
       <p> <a href="javascript:history.go(-1)"> Voltar</a></p>
    </main>
</body>
</html>