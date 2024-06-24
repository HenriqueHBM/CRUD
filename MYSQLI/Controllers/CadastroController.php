<?php
include "../Includes/Variaveis.php";
include "../Class/ClassCrud.php";

$Crud=new ClassCrud();

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
