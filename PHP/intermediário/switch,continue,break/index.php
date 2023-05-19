<?php
    $nome = 'rallenson';

    switch($nome){
        case 'rallenson':
            echo 'O nome é rallenson ' ."<br>"."<hr>";
            break;
        case 'joão':
            echo 'O nome é joão';
            break;
        default:
            echo 'O nome não é rallenson nem joão';
    }

    for($i = 0;$i < 10; $i++){
        echo $i;
        echo '<hr>';
        if($$i == 5){
            break;
        }
    }


?>