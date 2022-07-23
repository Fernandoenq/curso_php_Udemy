<?php

echo "teste <br>";
eChO "teste <br>";
ECHO "teste <br>";

$nome = "Fernando";
echo $nome;


// inteiros

echo 5;
echo'<br>';

//verifica se é inteiro
echo is_int(5);
echo is_int('o');//funciona dentro do if, pelo jeito fora dele so retorna no true

echo is_float(5);
echo is_float(4.4);

echo "bonti = $nome";
echo 'bonti = $nome';

echo is_string(5);
echo is_string("Fernando");

echo is_bool(1);
echo is_bool("Fernando");
echo is_bool(1.1);

$a = [1, 2, 3];
echo $a[2];
$b = ["Fernando", 2001, true];
print $b;
echo '<br>';
print_r($b);

//array associativo
$ass = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'marrom'];
print_r($ass);
echo '<br>';
print $ass['nome'];

$pessoa = ['nome' => 'Fernando', 'idade' => 20];

if($pessoa['idade'] >= 18){
    echo '<br>';
    echo "é maior de idade";
}

echo '<br>';
$algo = NULL;





?>