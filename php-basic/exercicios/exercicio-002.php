<?php

// EXERCÍCIO 002 - 01 

/**
 * 1. CRIE UM DOC.PHP
 * 2. Defina 2 variáveis com strings nome e sobrenome
 * 3. Numa estrutura básica de HTML, apresente um título:
 * O meu nome é: use h3
 * 4. Apresente o nome e o sobrenome numa variável nome completo em uma 
 * estrutura h1
 */

$nome = 'Jackson Douglas';
$sobrenome = 'de Souza';
$meuNomeCompleto = "$nome $sobrenome";

// EXERCÍCIO 002 - 02

/**
 * 1. CRIE UM DOC.PHP
 * 2. Defina 2 variáveis com strings nome e sobrenome
 * 3. Numa estrutura básica de HTML, apresente um título:
 * O meu nome COMPLETO é: use h3
 * 4. Logo, em um paragráfo, apresente a seguinte informação:
 * O meu nome tem X caracteres. use p
 * 5. Logo, em um paragráfo, apresente a seguinte informação:
 * O meu nome completo é: use p e todas as letras em minúsculo.
 * 6. Agora faça todas as letras em maiúsculo.
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>O meu nome é:</h3>
    <!-- CÓDIGO PHP ENTRE CÓDIGO HTML -->
    <h1><?= "$meuNomeCompleto" ?></h1>
    
    <!-- CÓDIGO PHP ENTRE CÓDIGO HTML -->
    <p>O meu nome tem <?= strlen($meuNomeCompleto)?> caracteres</p>
    <!-- Outra forma de fazer -->
    <p>O meu nome tem <?= mb_strlen($meuNomeCompleto)?> caracteres</p>
    <!-- letras minúsculas -->
    <p>O meu nome completo em minúsculo é: <?= strtolower($meuNomeCompleto)?></p>
    <!-- letras maiúsculas -->
    <p>O meu nome completo em maiúsculo é: <?= strtoupper($meuNomeCompleto)?></p>

</body>
</html>