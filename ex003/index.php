<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário 0 = Octal
    //     $num = 010;
    //     echo "O valor da variavél é $num";

    // $v = "true";
    // var_dump($v);

    // $num = 3e2; // 3 * 10 (2)
    // // echo "O valor é $num";
    // var_dump($num);

    // $num = (int) 3e2; //Forçando a virar um número inteiro (Coerção)
    // var_dump($num);

    // $num = (float) "950";
    // var_dump($num);

   // $casado = true;
    //var_dump($casado);
   // print "O valor para casado é $casado";
    //Para uma variável Boleano o true para echo ou print é 1 ou qualquer outro valor que não seja falso. Já para false o valor é 0 , vazio ou null.


//     $vet = [6,2.5,"Maria",true,5];
//    var_dump($vet);


//  

// $mas = "PHP";
// $mas2 = "\u{1F418}";
// echo "O valor é $mas $mas2";

//const ESTADO = "SP";
//echo "Moro em ESTADO";
//echo 'Moro em ESTADO';
//echo "Moro em " . ESTADO;
//echo "Estamos no ano de " .date('Y');

// $nome = "Rodrigo";
// $sobrenome = "Nogueira";
// echo "$nome \"Minotouro\" $sobrenome"; //Sequência de escape

//Para 'aspas simples' a única sequência de escape válida é a \' '\

// //Para "apas duplas" exitem várias sequências de escape são elas: 
// \n = Nova liniha 
// \t = Tabulação horizontal 
// \\ = Barra invertida 
// \$ = Sinal de cifrão
// \u{} = Codepoint Unicode

//SINTAXE HEREDOC

// $curso = "PHP";
// $ano = date('Y');
// echo <<< sd
// Estou estudando 
// $curso em $ano
// sd;

//SINTAXE NOWDOC

// Aceitam textos em multiplas linhas porém não contem interpretação.

    ?>
</body>
</html>