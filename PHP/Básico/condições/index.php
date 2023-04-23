<?php
//condições
$idade = 20;
$nome = 'Rallenson';
if ($idade >= 18) {
    echo 'Maior de idade';
} else {
    echo 'Menor de idade';
}
echo "<br>";
if ($idade >= 18 && $nome == 'Rallenson') {
    echo 'Maior de idade e o nome é Rallenson';
} else {
    echo 'Menor de idade ou o nome não é Rallenson';
}
echo "<br>";
if ($idade >= 18 || $nome == 'Rallenson') {
    echo 'Maior de idade ou o nome é Thallenson';
} else {
    echo 'Menor de idade e o nome não é Rallenson';
}
echo "<br>";
if ($idade >= 18 xor $nome == 'Rallenson') {
    echo 'Maior de idade mas nome é Rallenson';
} else {
    echo 'Menor de idade mas o nome não é Rallenson';
}
echo "<br>";
if ($idade >= 18) {
    echo 'Maior de idade';
} elseif ($idade >= 16) {
    echo 'Pode votar';
} else {
    echo 'não pode votar';
}
echo "<br>";
//operador ternário
echo ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';
echo "<br>";
//switch
switch ($idade) {
    case 18:
        echo 'Tem 18 anos';
        break;
    case 20:
        echo 'Tem 20 anos';
        break;
    default:
        echo 'Não tem 18 nem 20 anos';
}
echo "<br>";
//operador spaceship
//O operador spaceship <=> compara duas expressões e retorna um dos três valores possíveis: 
//-1, 0 ou 1. 
//Ele retorna -1 se a primeira expressão for menor que a segunda, 
//0 se as duas expressões forem iguais e 
//1 se a primeira expressão for maior que a segunda. No código dado, 
//a variável $a é maior que $b, então a expressão $a <=> $b retorna 1.
$a = 50;
$b = 35;
var_dump($a <=> $b);
echo "<br>";
//operador null coalescing
//O operador null coalescing (??)verifica se a primeira expressão é nula
//se for, retorna a segunda expressão
//Se a primeira expressão não for nula, ela é retornada
//Se a primeira expressão e a segunda expressão forem nulas, a última expressão é retornada. 
//No código dado, tanto $c quanto $d são nulos, então a expressão $c ?? $d ?? $e retorna o valor de $e, que é 10.
$c = null;
$d = null;
$e = 10;
echo $c ?? $d ?? $e;
echo "<br>";
//operador de incremento e decremento
$f = 10;
echo $f++;
echo "<br>";
echo $f;
echo "<br>";
?>
<?php
//condição com html
if ($idade == 20) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php good word</title>
    </head>

    <body>
        <main>
            <div style="background:pink;width:300px;height:300px"></div>
        </main>
    </body>

    </html>
<?php
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php bad word</title>
    </head>

    <body>
        <main>
            <div style="background:blue;width:300px;height:300px">Bad word</div>
        </main>

    </body>

    </html>
<?php
}
?>