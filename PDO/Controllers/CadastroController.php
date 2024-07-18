<?php

include "../Includes/Variaveis.php";
include "../Class/ClassCrud.php";

$crud = new ClassCrud();

if ($acao == 'Cadastrar') {
    $crud->insertDB(
        "cadastro",
        "?,?,?,?",
        // info do arquivo variaveis
        array(
            $id,
            $nome,
            $sexo,
            $cidade
        )
    );

    echo "Cadastro Realizado com Sucesso!";
} else {
    $crud->updateDB(
        "cadastro",
        'nome=?, sexo=?, cidade=?',
        'id=?',
        array(
            $nome, $sexo, $cidade, $id
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
