<?php include 'Includes/Header.php'   ?>
<?php include 'Class/ClassCrud.php' ?>

<div class="content">
    <?php
    $crud = new ClassCrud();
    $id_user = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $bfetch =  $crud->selectDB(
        "*",
        'cadastro',
        'where id = ?',
        'i',
        array(
            $id_user
        )
    );
    $result = $fetch = $bfetch->fetch_all();
    foreach ($result as $fetch) {
    ?>
        <h1>Dados do Usuário</h1>
        <hr>
        <strong>Nome:</strong> <?php echo $fetch[1]; ?> <br>
        <strong>Sexo:</strong> <?php echo $fetch[2]; ?> <br>
        <strong>Cidade:</strong> <?php echo $fetch[3]; ?> <br>
        
    <?php } ?>
</div>

<?php include 'Includes/Footer.php'  ?>