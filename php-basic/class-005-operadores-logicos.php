<?php
    /**
     * Operadores Lógicos
     * 
     * Os operadores lógicos são usados para combinar declarações condicionais.
     * Eles permitem que você teste mais de uma condição, ou seja, mais de uma variável ao mesmo tempo.
     * Ou também permitem que você teste várias condições dentro da mesma declaração.
     * No PHP temos três operadores lógicos:
     * São eles o operador E (&&), o operador OU (||) e o operador NÃO (!).
     */

    // Operador E (&&) - Retorna true se as duas condições forem verdadeiras
    // Operador OU (||) - Retorna true se uma das condições for verdadeira
    // Operador NÃO (!) - Retorna true se a condição for falsa

    // Exemplo de uso:

    $variavelUm = 1500;
    $variavelDois = 3000;

    $variavelComparacao = ($variavelUm < $variavelDois) && ($variavelUm < 10000); 
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois as duas condições são verdadeiras.
    $variavelComparacao = ($variavelUm > $variavelDois) || ($variavelUm > 10000);
    // Neste caso a variável $variavelComparacao vai receber o valor false, pois as duas condições são falsas.
    $variavelComparacao = ($variavelUm < 15000) && ($variavelDois < 30000);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois as duas condições são verdadeiras.
    $variavelComparacao = ($variavelUm < 15000) && ($variavelDois > 300000);
    // Neste caso a variável $variavelComparacao vai receber o valor false, pois a primeira condição é verdadeira e a segunda é falsa.
    $variavelComparacao = ($variavelUm > 100) || ($variavelDois > 30000);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois a primeira condição é verdadeira, ignorando a segunda condição.
    //pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.
    $variavelComparacao = ($variavelUm == 1500) && ($variavelDois < $variavelUm);
    // Neste caso a variável $variavelComparacao vai receber o valor false, pois a primeira condição é verdadeira e a segunda é falsa.
    $variavelComparacao = ($variavelUm == 1500) && ($variavelDois > $variavelUm);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois as duas condições são verdadeiras.
    $variavelComparacao = ($variavelUm == 1500) || ($variavelDois > $variavelUm);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois a primeira condição é verdadeira, ignorando a segunda condição.
    //pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.
    $variavelComparacao = ($variavelUm == 1500) || ($variavelDois < $variavelUm);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois a primeira condição é verdadeira, ignorando a segunda condição.
    //pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.
    $variavelComparacao = ($variavelUm == 1500) || ($variavelDois == $variavelUm);
    // Neste caso a variável $variavelComparacao vai receber o valor true, pois a primeira condição é verdadeira, ignorando a segunda condição.
    //pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.

    $variavelComparacao = true && false;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois as duas precisam ser verdadeiras para que o operador E (&&) retorne true.
    $variavelComparacao = true || false;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.
    $variavelComparacao = !true;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois o operador NÃO (!) inverte o valor da condição.
    $variavelComparacao = true && true;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois as duas condições são verdadeiras.
    $variavelComparacao = true || true;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois basta uma das condições ser verdadeira para que o operador OU (||) retorne true.
    $variavelComparacao = !false;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois o operador NÃO (!) inverte o valor da condição.
    $variavelComparacao = false && false;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois as duas condições são falsas.
    $variavelComparacao = false || false;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois as duas condições são falsas.
    $variavelComparacao = !true && !false;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois NOT true é false e NOT false é true.
    $variavelComparacao = !true || !false;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois NOT true é false e NOT false é true.
    $variavelComparacao = !false && !false;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois NOT false é true e NOT false é true.
    $variavelComparacao = !false || !false;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois NOT false é true e NOT false é true.

    //--

    // Exemplos numéricos para o operador NOT:

    $variavelComparacao = 10 > 5;
    // Neste caso a variável $variavelComparacao vai receber o valor true. Pois 10 é maior que 5.
    $variavelComparacao = 10 < 5;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois 10 não é menor que 5.
    $variavelComparacao = !(10) >= 10;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois 10 é maior ou igual a 10, mas o operador NOT (!) inverte o valor da condição.
    $variavelComparacao = !(10) <= 10;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois 10 é menor ou igual a 10, mas o operador NOT (!) inverte o valor da condição.
    $variavelComparacao = !(10) == 10;
    // Neste caso a variável $variavelComparacao vai receber o valor false. Pois 10 é igual a 10, mas o operador NOT (!) inverte o valor da condição.

//--