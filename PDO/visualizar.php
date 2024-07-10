<?php include 'Includes/Header.php'   ?>
<?php include 'Class/ClassCrud.php' ?>

<div class="content">
    <?php  
        $crud = new ClassCrud();
        $id_user = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $bd_fetch = $crud->selectDB(
            "*",
            "cadastro",
            "where id=?",
            array($id_user)
        );
        $fetch = $bd_fetch->fetch(PDO::FETCH_ASSOC);
    ?>

<h1>Dados do Usuário</h1>
<hr>
<strong>Nome:</strong>  <?php echo $fetch['nome'];?> <br>
<strong>Sexo:</strong>  <?php echo $fetch['sexo'];?> <br>
<strong>Cidade:</strong>  <?php echo $fetch['cidade'];?> <br>
</div>

<?php include 'Includes/Footer.php'  ?>