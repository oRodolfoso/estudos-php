<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funcções Aritiméticas em PHP</h1>

    <?php 
        $r = abs (500);
        echo "O valor é: $r"; // abs() = Valor absoluto
    ?><br>

    <?php 
        $r = base_convert(254, 10, 8);
        echo "O valor é: $r" // base-convert = Conversor de base
    ?><br>

    <?php
        $r = intdiv(5,2);
        echo "O valor é: $r" // intdiv = Para divisões inteiras

        // Outras funções  - ceil() arredonda pra cima , floor() arredonda pra baixo, round()arredonda.
        // hypot() Calcula hypotenusa 
        
    ?><br>

    <?php 
        $r = max(10,2);
        $r1 = min(5,50);
        echo "O valor máximo é: $r e o valor mínimo é: $r1"; // min(), max(), mostra o valor minimo e máximo de uma sequência
        
    ?> <br>

    <?php 
        $r = pi();
        echo "O valor de PI é: $r"; // Mostra o valor de PI, para isso, posso usar também o comando M_PI
    ?><br>

    <?php 
        $r = pow(5,2);
        echo "O valor da potência é: $r" // pow() mostra  valor da potência
    ?><br>

<!-- Outra funções aritméticas - sin(), cos(), tan() para angulos aritiméticos, seno, cosseno e tangente. Outra função seria o sqrt() ela calcula a raíz quadrada de um número-->

<?php 
    $r = sqrt(81);
    echo "A raíz quadrada é: $r"
?><br>

<?php 
    $r = 27 ** (1/3);
    echo "A raíz cubica é: $r" //Para calculos em raíz cubica
?>

</body>
</html>