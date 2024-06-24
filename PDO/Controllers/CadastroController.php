<?php

include "../Includes/Variaveis.php";
include "../Class/ClassCrud.php";

$Crud = new ClassCrud();

$Crud->insertDB(
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
