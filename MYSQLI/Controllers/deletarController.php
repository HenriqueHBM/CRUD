<?php include '../Class/ClassCrud.php';

$crud = new ClassCrud();
$id_user = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deleteDB(
    'cadastro',
    'id=?',
    'i',
    array(
        $id_user
    )
);

echo "Dado deletado com sucesso";