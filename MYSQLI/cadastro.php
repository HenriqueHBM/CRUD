<?php include 'Includes/Header.php'   ?>

<div class="content">
    <div class="resultado"></div>
    <div class="formulario">
        <h1 class="center">Cadastro</h1>
        <form id="formCadastro" name="formCadastro" method="post" action="Controllers/CadastroController.php">
            <div class="flex">
                <div class="formularioInput">
                    Nome <br>
                    <input type="text" name="nome" id="nome">
                </div>

                <div class="formularioInput">
                    Sexo <br>
                    <select name="sexo" id="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Fêminino</option>
                        <option value="Prefiro Não Dizer">Prefiro Não Dizer</option>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="formularioInput">
                    Cidade <br>
                    <input type="text" name="cidade" id="cidade">
                </div>

            </div>

                <div class="formularioInput formularioInput100 center">
                    <input type="submit" value="cadastrar">
                </div>
        </form>
    </div>
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
