<?php
    //para declarar e utilizar variaveis, usa-se o'$'
    $categorias = [];
    $nome = 'Felipe';
    $idade = 17;

    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    //print_r($categorias);

    // var_dump($nome);
    // var_dump($idade);

    if ($idade >=6 && $idade<=12 ) {
        echo 'O nadador '.$nome.' compete na categoria '. $categorias[0];
    }elseif ($idade >=13 && $idade <=18) {
        echo 'O nadador '.$nome.' compete na categoria '. $categorias[1];
    }else{
        echo 'O nadador '.$nome.' compete na categoria '. $categorias[2];
    }
?>