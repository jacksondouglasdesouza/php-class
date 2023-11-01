<?php

    /**
     * Operadores de Comparação
     * Os operadores de comparação são usados para comparar dois valores (número ou string):
     * Verificam se os valores são iguais ou diferentes, ou se um valor é maior ou menor que o outro.
     * Ou verificar se eles são do mesmo tipo de dados.
     * O resultado da comparação é um valor booleano, ou seja, verdadeiro ou falso.
     */

     // Verifique um exemplo de operadores de comparação em ação:

        $x = 100;
        $y = "100";
        $z = "200";
        $w = 200;

        echo $x == $y; // retorna true porque os valores são iguais.
        echo "<br>";
        echo $x === $y; // retorna false porque os tipos de dados não são iguais.
        echo "<br>";
        echo $x != $y; // retorna false porque os valores são iguais.
        echo "<br>";
        echo $x !== $y; // retorna true porque os tipos de dados não são iguais.
        echo "<br>";
        echo "********";
        echo "<br>";
        echo $z > $w; // retorna false porque $ z não é maior que $ w.
        echo "<br>";
        echo $z < $w; // retorna false porque $ z não é menor que $ w.
        echo "<br>";
        echo $z >= $w; // retorna true porque $ z é maior ou igual a $ w.
        echo "<br>";
        echo $z <= $w; // retorna true porque $ z é menor ou igual a $ w.
        echo "<br>";

        //--

        // Outras formas de comparação de diferença:

        $xyz = (2 != 3); // retorna true porque 2 é diferente de 3.
        $xyz = (2 <> 3); // retorna true porque 2 é diferente de 3.
        $xyz = (50 != 50); // retorna false porque 50 é igual a 50.
        $xyz = (50 != '50'); // retorna false porque 50 é igual a 50.
        $xyz = (50 !== '50'); // retorna true porque 50 não é idêntico a '50' um é número e o outro é string.


        // Comparação de valores maior ou menor que:

        $xyz = (5 > 3); // retorna true porque 5 é maior que 3.
        $xyz = (5 < 3); // retorna false porque 5 não é menor que 3.
        $xyz = (5 >= 3); // retorna true porque 5 é maior ou igual a 3.
        $xyz = (5 <= 3); // retorna false porque 5 não é menor ou igual a 3.
        $xyz = (5 == 5); // retorna true porque 5 é igual a 5.
        $xyz = (5 == '5'); // retorna true porque 5 é igual a '5'.
        $xyz = (5 === '5'); // retorna false porque 5 não é idêntico a '5' (um é número e o outro é string).
        $xyz = (5 !== '5'); // retorna true porque 5 não é idêntico a '5' (um é número e o outro é string).

        //--

        # A partir do PHP 7,foi adicionado um novo operador de comparação chamado <=> (spaceship).
        # O operador <=> retorna 0 se os dois lados forem iguais.
        # Retorna 1 se o lado esquerdo for maior.
        # Retorna -1 se o lado direito for maior.

        $x = 100 <=> 100; // retorna 0, porque 100 é igual a 100
        $x = 100 <=> 99; // retorna 1, porque 100 é maior que 99
        $x = 99 <=> 100; // retorna -1, porque 99 é menor que 100
        $x = 0 <=> 0; // retorna 0, porque 0 é igual a 0

        //--

        

    

//-