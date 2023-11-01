<?php
    // Caracteres de escape

    echo '<p>Este paragrafo de HTML vai ser interpretado normalmente no PHP</p>';
    echo '</br>';

    // Os caracteres de escape são usados para escrever caracteres especiais,
    //como é o caso das aspas simples e duplas, que são usadas para delimitar
    //strings. Para evitar conflitos no código usa-se o caractere de escape.

    echo 'O professor disse: "Hoje a pizza é por minha conta"';
    echo '</br>';
    echo "O professor disse: \"Hoje a pizza é por minha conta\"";
    echo '</br>';
    echo 'I\'m going to John\'s house';
    echo '</br>';
    echo "I'm going to John's house";
    echo '</br>';
    echo "I'm not sure John \"the great\" will win the tournament";
    echo '</br>';
    echo 'I\'m not sure John "the great" will win the tournament';
    echo '</br>';


    //--

    // Quebra de linha no console - terminal
    echo "Jackson Douglas\n\rde Souza";
    echo '</br>';
    echo 'Jackson Douglas\n\rde Souza';
    
    //--

    // UNICODEs
    // https://www.charset.org/utf-8 - Tabela de caracteres UNICODE
    print "</br>";
    print '<p>Unicode</p>';
    print "\u{A9}"; // ©
    print "</br>";
    print "\u{BC}"; // ¼
    print "</br>";
    print"\u{AE}"; // ®
    print "</br>";

    // HTML Entities
    // https://www.w3schools.com/html/html_entities.asp

    print "</br>";
    print '<p>HTML Entities</p>';
    print "&copy;"; // ©
    print "</br>";
    print "&frac14;"; // ¼
    print "</br>";
    print "&reg;"; // ®
    print "</br>";
    print "&HumpEqual;"; // ≏

    //--

    




//--