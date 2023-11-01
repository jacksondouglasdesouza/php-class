<?php

    // EXERCÍCIO 001

    // Sendo A 100, imprima o valor de A;

    $A = 5;
    echo $A;
    echo "</br>";

    // Se A ** A e em seguida B será a metade de A, quanto estará valendo B?

    $A **= $A;
    echo $A;
    echo "</br>";
    $B = $A / 2;
    echo $B;
    echo "</br>";

    // Se A agora vale 1000 e B valera 3 vezes o valor de A, imprima o valor de B;

    $A = 1000;
    $B = $A * 3;
    echo $A;
    echo "</br>";
    echo $B;
    echo "</br>";

    // Se A na primeira impressão vale 100, imprima em seguida o valor de A acrescido de 1 unidade.

    $A = 100;
    echo $A;
    echo "</br>";
    echo ++$A;

    // OU

    echo "</br>";
    echo "***********";
    echo "</br>";
    $AA = 100;
    echo $AA++; # Vai imprimir somente o valor atual de AA.
    echo "</br>";
    echo $AA; # Ele imprime o acréscimo na segunda operação.

    /**
     * Se AAA vale 1000 
     * Se BBB vale 1500
     * CCC será igual AAA + BBB
     * Acrescente 1 unidade a C 
     * Em seguida imprima o valor de CCC atualizado!
     */

    $AAA = 1000;
    $BBB = 1500;
    $CCC = $AAA + $BBB;
    //
    ++$CCC;
    echo "</br>";
    echo "***********";
    echo "</br>";
    echo $AAA;
    echo "</br>";
    echo $BBB;
    echo "</br>";
    echo $CCC;
    echo "</br>";

//--