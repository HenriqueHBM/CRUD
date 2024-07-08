<?php

(include 'Includes/Header.php');
include 'Class/ClassCrud.php';
?>

<div class="content">
    <table class="tabela-crud">
        <tr>
            <td>Nome</td>
            <td>sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        <!-- Estrutura de loop -->
        <?php

        $crud = new ClassCrud();

        $bFetch = $crud->selectDB(
            "*",
            "cadastro",
            " ",
            array()
        );

        foreach ($bFetch as $fetch) {
        ?>

            <tr>
                <td><?php echo $fetch['nome'] ?> </td>
                <td><?php echo $fetch['sexo'] ?></td>
                <td><?php echo $fetch['cidade'] ?></td>
                <td>
                    <a href="visualizar.php">
                        <img src="Images/lupa.png" class="icons bg-info" alt="Visualizar" width="20" height="20" >
                    </a>
                    <a href="editar.php">
                        <img src="Images/pencil.png" class="icons bg-warning" alt="Editar" width="20" height="20" >
                    </a>
                    <a href="deletar.php">
                        <img src="Images/trash.png" class="icons bg-danger" alt="Deletar" width="20" height="20" >
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include 'Includes/Footer.php'  ?>