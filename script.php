<?php
    //para declarar e utilizar variaveis, usa-se o'$'
    $categorias = [];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];;

    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    // VALIDAÇÃO DAS ENTRADAS
    if (empty($nome)) {
        echo 'Nome vazio.';
        return;
    }

    if (strlen($nome) <2) {
        echo 'Nome deve ter pelo menos 2 letras';
        return;
    }

    if (strlen($nome) >40) {
        echo 'Nome deve ter no máximo 40 letras';
        return;
    }

    if(!is_numeric($idade)){
        echo 'Idade inválida';
        return;
    }
    // --

    //print_r($categorias);
    // var_dump($nome);
    // var_dump($idade);

    if ($idade >=6 && $idade<=12 ) {
        echo 'O nadador "'.$nome.'" compete na categoria: '. $categorias[0];
    }elseif ($idade >=13 && $idade <=18) {
        echo 'O nadador "'.$nome.'" compete na categoria: '. $categorias[1];
    }else{
        echo 'O nadador "'.$nome.'" compete na categoria: '. $categorias[2];
    }
?>