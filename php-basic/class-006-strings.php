<?php

    // Strings
    /**
     * Strings é uma serie de caracteres que podem ser armazenados em uma variável ou apresentados
     * através de uma função de saída (echo, print, printf, etc). Elas podem ser definidas de três
     * formas diferentes (simples quote, duplas quote e heredoc).
     */

    $stringSimples = 'Esta é uma String simgle quote';
    $stringDuplas = "Esta é uma String double quote";
    $stringHeredoc = <<<EOT
        Esta é uma String heredoc
        que pode ser escrita em várias linhas
        sem a necessidade de concatenar
        EOT;
    //-- 

    echo $stringSimples;
    echo '<br>';
    echo $stringDuplas;
    echo '<br>';
    echo $stringHeredoc;
    echo '<br>';

    // Concatenação de strings
    /**
     * A concatenação de strings pode ser feita através do operador de concatenação (.) ou através 
     * do operador de atribuição de concatenação (.=).
     *Este processo permite que você junte duas ou mais strings em uma única string.
     */

    $meuNome = 'Jackson Douglas';
    $meuSobrenome = 'de Souza';
    $meuNomeCompleto = $meuNome . $meuSobrenome;

    echo $meuNomeCompleto;
    echo '<br>';

    $meuNomeCompleto .= ' - Desenvolvedor Web';

    echo $meuNomeCompleto;

    // A diferença entre simples e duplas quotes é que as simples não interpretam variáveis e as duplas sim.
    // Exemplo:
    // echo "Meu nome é $meuNomeCompleto"; // Meu nome é Jackson Douglas de Souza - Desenvolvedor Web

    echo '<br>';
    echo "Meu nome é $meuNomeCompleto"; // Meu nome é Jackson Douglas de Souza - Desenvolvedor Web
    echo '<br>';

    // É executado um Parse na string, ou seja, entende que a variável $meuNomeCompleto
    // deve ser interpretada e seu valor deve ser exibido. Somente na string com aspas duplas!

    /**
     * HEROEDOC and NOWDOC
     * Apesar de não serem muito utilizados, os recursos HEREDOC e NOWDOC são muito úteis para
     * escrever strings que contenham muitas linhas.
     * 
     */

    // EXEMPLOS:

    $cliente = 'Jackson Douglas';
    $email = 'jacksondouglasdesouza@gmail.com';
    
    # HEREDOC - Permite que você escreva uma string em várias linhas sem a necessidade de concatenar.
    $corpoTexto = <<<LABEL
        Olá $cliente,
        venho através deste email informar que seu cadastro foi realizado com sucesso.
        Logo estaremos enviando mais informações para o email $email.
        Muito obrigado!
        Atenciosamente,
        João da Silva
        LABEL;
    //--
    
    echo $corpoTexto;
    echo '<br>';


    # NOWDOC - Permite que você escreva uma string em várias linhas sem a necessidade de concatenar.
    #Mais não interpreta variáveis.

    $corpoTexto = <<<'LABEL'
        Olá $cliente,
        venho através deste email informar que seu cadastro foi realizado com sucesso.
        Logo estaremos enviando mais informações para o email $email.
        Muito obrigado!
        Atenciosamente,
        João da Silva
    LABEL;
    //--

    echo $corpoTexto;
    echo '<br>';

//--