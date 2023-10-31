<?php

    // VARIÁVEIS
    //------------

    /*
    As variáveis são usadas para guardar dados:
    numeros, textos e etc...
    Podemos modificar os seus valores ao longo do tempo no código.
    Em PHP as variáveis são inicializadas com o simbolo de $
    $ + NOME DA VARIÁVEL + valor
    ex: $varialvelXis = 100
    
    */
    
    $variavel = 100;
    echo $variavel;

    // Pode alterar o valor da variável para qualquer outro tipo!

    $variavel = "Jackson Douglas de Souza";
    echo "</br>";
    echo $variavel;

    // As variáveis são case sensitive: $casa != de $Casa
    // CASOS PROIBITIVOS:

    # $1var1 = 0;
    # $!var1 = 0;
    # $var1(25) = 0;
    # $var1 epcaco = 0;
    # $1var1-digito = 0;

    // CASOS PERMITIDOS:

    $variavel1 = "A CASA DO JACARÉ É NO RIO!";
    echo "</br>";
    echo $variavel1;
    $variavel_1 = "A CASA DO JACARÉ É NO RIO!";
    echo "</br>";
    echo $variavel_1;
    $variavelUm = "A CASA DO JACARÉ É NO RIO!";
    echo "</br>";
    echo $variavelUm;
    $_variavel1 = "A CASA DO JACARÉ É NO RIO!";
    echo "</br>";
    echo $_variavel1;
    $_1var = "A CASA DO JACARÉ É NO RIO!";
    echo "</br>";
    echo $_1var;

    // ALGUMAS CONVERSÕES

    $umaVariavbel = "Camel Case";
    $outra_variavel = "Snake Case";
    $VarialvelNao = "Studly Case"; #NÃO RECOMENDADO!

    echo "</br></br>";
    echo $umaVariavbel;
    echo "</br>";
    echo $outra_variavel;
    echo "</br>";
    echo $VarialvelNao;
    echo "</br>";

//--
