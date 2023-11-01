<?php

    # TIPOS DE DADOS
    #==============
    /**
     * As variáveis em php podem ter diferentes tipos de dados
     * logo a mesma variavel pode ser aloterada de tipo de valor
     * sem a necessidade de acrescentar um tipo de dado para a mesma
     *logo que, apesar de elas serem de tipo implícito é muito
     *conhecer os tipos de operadores na programação!
     */

    $variavel = 100;
    $variavel = 'CEM';

    // TIPOS DE DADOS

    $inteiro = 100;
    $float = 85.85;
    $string = "Falso - Verdadeiro";
    $booleano = true;
    $booleano = false;
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // $pessoa = new Pessoa();
    $nulo = null;

    // OPERADORES

    /**
     * Os operadores são símbolos que permitem executar
     * operações matemáticas ou lógicas, as operações
     * comparativas.
     */

    $value = 100;
    $valueJoao = "João";

    // Operadores Aritiméticos

    $adicao = 4 + 6;
    $subtracao = 6 - 10;
    $multiplicacao = 15 * 3;
    $divisao = 105 / 3;
    $modulo = 200 % 4;
    $potencia = 12 ** 2;

    // Módulo

    $modulo = 100 % 3; # 33.3333.... Logo [ 1 ]
    $modulo = 60 % 3; # 20 ... Logo [ 0 ]
    $modulo = 13 % 2; # 6.5 .... Logo [ 1 ]

    echo 3462 / 7;
    echo '</br>';
    echo 3462 % 7;
    echo '</br>';
    echo 3462 % 2;

    $valueA = 10;
    $valueB = 20;
    $valueC = $valueD = $valueE = 100;
    $result = $valueA + $valueB + $valueC;
    $result = 500 + $valueB;
    $result = $result + $valueD;
    $result = $valueA * $valueB;
    $result = $valueD * $valueC + $valueE;
    echo "</br></br>";

    echo $valueA;
    echo "</br>";
    echo $valueB;
    echo "</br>";
    echo $valueC;
    echo "</br>";
    echo $valueD;
    echo "</br>";
    echo $valueE;
    echo "</br>";
    echo $result;
    echo "</br>";
    echo $potencia;

    //--

    # OPERADORES DE ATRIBUIÇÃO COMBINADOS

    
    echo "</br>";
    echo "*************";
    $valueA = 10;
    echo "</br>";
    echo $valueA;
    $valueA = $valueA + 20; # 30 <<<
    echo "</br>";
    echo $valueA;
    $valueA = $valueA - 7; # 23 <<<
    echo "</br>";
    echo $valueA;
    $valueA = $valueA * 2; # 46
    echo "</br>";
    echo $valueA;
    $valueA = $valueA / 2; # 23
    echo "</br>";
    echo $valueA;
    
    echo "</br>";
    echo "*************";

    // FORMA SIMPLIFICADA

    $valueA = 10;
    echo "</br>";
    echo $valueA;
    $valueA += 20; # 30 <<<
    echo "</br>";
    echo $valueA;
    $valueA -= 7; # 23 <<<
    echo "</br>";
    echo $valueA;
    $valueA *= 2; # 46 <<<
    echo "</br>";
    echo $valueA;
    $valueA /= 2; # 23 <<<
    echo "</br>";
    echo $valueA;

    echo "</br>";
    echo "*************";

    # Operadores de incremento e decremento

    // Adiciona ou subtrae uma unidade no valor da variável

    $valueA++; # 24 <<<
    echo "</br>";
    echo $valueA;
    $valueA--; # 23 <<<
    echo "</br>";
    echo $valueA;

    echo "</br>";
    echo "*************";
    echo "</br>";
    echo "*************";

    // Operadores de incremento e decremento com pré e pós atribuição.

    $valueA = 100;
    echo "</br>";
    echo $valueA;
    ++$valueA; # Será atribuido primeiramente o valor
    $valueA++; # Será atribuido posteriomente o valor
    echo "</br>";
    echo $valueA;
    --$valueA; # Será decrementado primeiramente o valor
    $valueA--; # decrementado posteriomente o valor
    echo "</br>";
    echo $valueA;

//--