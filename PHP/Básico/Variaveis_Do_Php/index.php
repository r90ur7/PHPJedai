<?php
    // Nome do dominio
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    // É o caminho até a pasta selecionada
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    // "Print_r" é uma função do PHP que mostra o que tem dentro de uma variável complexa.
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
    // SErver é um variavel que puxa todas as informações do servidor onde está
?>

<?php
        //constantes
        define('Dominio', 'Localhot');
        echo Dominio;
?>