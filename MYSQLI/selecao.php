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
            " ",
            array()
        );

        //var_dump($bFetch->fetch());
        while($result = $bFetch->fetch_all()){
        foreach ($result as $fetch) {
        ?>

            <tr>
                <td><?php echo $fetch[1] ?> </td>
                <td><?php echo $fetch[2] ?></td>
                <td><?php echo $fetch[3] ?></td>
                <td>
                <a href=<?php echo "visualizar.php?id={$fetch[0]}"; ?>>
                        <img src="Images/lupa.png" class="icons bg-info" alt="Visualizar" width="20" height="20" >
                    </a>
                    <a href="editar.php">
                        <img src="Images/pencil.png" class="icons bg-warning" alt="Editar" width="20" height="20" >
                    </a>
                    <a class="deletar"  href="<?php echo "Controllers/deletarController.php?id={$fetch[0]}"; ?>">
                        <img src="Images/trash.png" class="icons bg-danger" alt="Deletar" width="20" height="20" >
                    </a>
                </td>
            </tr>
        <?php } }?>
    </table>
</div>
<script>
    $('.deletar').on('click', function(e){
    e.preventDefault();
    
    var link = $(this).attr('href');
    if(confirm('Deseja mesmo apagar esse dado?')){
        window.location.href = link;
    }else{
        return false;
    }
});
</script>
<?php include 'Includes/Footer.php'  ?>