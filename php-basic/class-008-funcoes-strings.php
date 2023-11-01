<?php
    // Funções para operar com strings

    /**
     * Strings são cadeias de caracteres muito especiais dentro da programação
     * com PHP. Existem muitas funções para operar com strings, e aqui vamos
     * ver algumas delas.
     * https://www.php.net/manual/pt_BR/ref.strings.php - Documentação oficial
     */

     //--

    $frase = 'O rato roeu a roupa do rei de Roma'; // String com 34 caracteres
    strlen($frase); // Retorna o tamanho da string
    echo 'Retorna o tamanho da string ' . strlen($frase); // Retorna o tamanho da string
    echo '<br>';
    echo $frase[0]; // Retorna o caractere na posição 0 da string
    echo '<br>';
    echo $frase[1]; // Retorna o caractere na posição 1 da string
    echo '<br>';
    echo $frase[2]; // Retorna o caractere na posição 2 da string
    echo '<br>';
    echo $frase[3]; // Retorna o caractere na posição 3 da string
    echo '<br>';
    echo $frase[4]; // Retorna o caractere na posição 4 da string
    echo '<br>';
    echo $frase[5]; // Retorna o caractere na posição 5 da string
    echo '<br>';

    //--

    echo substr($frase, 0, 6); // Retorna os caracteres da posição 0 até a posição 3 da string
    echo '<br>';
    echo strtoupper($frase); // Retorna a string em maiúsculo
    echo '<br>';
    echo strtolower($frase); // Retorna a string em minúsculo
    echo '<br>';
    echo str_replace('Roma', 'Lisboa', $frase); // Substitui a palavra Roma por Lisboa na string
    echo '<br>';
    echo strpos($frase, 'Roma'); // Retorna a posição da palavra Roma na string
    echo '<br>';

    //--

    // No php8 foi adicionado o recurso de poder checar se uma string contém
    // uma palavra ou caractere específico, e retornar true ou false
    // tanto no início quanto no final da string
    // também é possível checar se a string contém a palavra completa na variável.

    echo str_starts_with($frase, 'O'); // Retorna true se a string começar com a letra O  
    echo '<br>';
    echo str_ends_with($frase, 'Roma'); // Retorna true se a string terminar com a palavra Roma
    echo '<br>';
    echo str_contains($frase, 'rei'); // Retorna true se a string contiver a palavra rei
    echo '<br>';
    echo str_contains($frase, 'rei de Roa'); // Retorna true se a string contiver a frase rei de Roma
    echo '<br>';
    echo str_contains($frase, 'rei d ma'); // Retorna true se a string contiver a frase rei de Roma
    
    //--

    





//---