<?php include 'Includes/Header.php'   ?>

<div class="content">
    <?php include './Includes/formularioCadastro.php' ?>
</div>
<script>
    $('#formCadastro').on('submit', function(e) {
        e.preventDefault();
        let dados = $(this).serialize();

        $.ajax({
            url: 'Controllers/CadastroController.php',
            type: 'post',
            dataType: 'html',
            data: dados,
            success: function(dados) {
                $('.resultado').show().html(dados)
            }
        })
    });
</script>
<?php include 'Includes/Footer.php'  ?>
