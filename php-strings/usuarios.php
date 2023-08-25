<?php

$email = 'renato@alura.com.br';
$senha = '123321àã';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
$nome = '';
$sobrenome = '';
list ($nome, $sobrenome) = explode (' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Renato Costa, 19, renato@alura.com.br';
var_dump (explode (',', $csv));

?>