<?php
include "../Includes/Variaveis.php";
include "../Class/ClassCrud.php";

$Crud = new ClassCrud();

if ($acao == 'Cadastrar') {
    $Crud = $Crud->insertDB(
        "cadastro",
        "?,?,?,?",
        "isss",
        array(
            $id,
            $nome,
            $sexo,
            $cidade
        )
    );
    echo "Cadastro Realizado com Sucesso!";
} else {
    $Crud->updateDB(
        "cadastro",
        'nome=?,sexo=?,cidade=?',
        'id=?',
        'sssi',
        array(
            $nome, $sexo, $cidade, $id
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
