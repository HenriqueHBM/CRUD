<?php 
include 'Class/ClassCrud.php';
//se tiver id == eidtar, senao, == cadastro novo

    if(isset($_GET['id'])){
        $acao= "Editar";

        $crud = new ClassCrud();

        $bd_fetch = $crud->selectDB(
            "*",
            "cadastro",
            "where id=?",
            array($_GET['id'])
        );
        $fetch = $bd_fetch->fetch(PDO::FETCH_ASSOC);
        $id= $fetch['id'];
        $nome= $fetch['nome'];
        $sexo= $fetch['sexo'];
        $cidade= $fetch['cidade'];

    }else{
        $acao='Cadastrar';
        $id=0;
        $nome ='';
        $sexo = '';
        $cidade = '';
    }
?>

<div class="resultado"></div>
<div class="formulario">
    <h1 class="center">Cadastro</h1>
    <form id="formCadastro" name="formCadastro" method="post" action="Controllers/CadastroController.php">

    <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div class="flex">
            <div class="formularioInput">Nome <br>
                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
            </div>

            <div class="formularioInput">Sexo <br>
                <select name="sexo" id="sexo">
                    <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Fêminino</option>
                    <option value="Prefiro Não Dizer">Prefiro Não Dizer</option>
                </select>
            </div>
        </div>
        <div class="flex">
            <div class="formularioInput">
                Cidade <br>
                <input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>">
            </div>

        </div>

        <div class="formularioInput formularioInput100 center">
            <input type="submit" value="<?php echo $acao; ?>">
        </div>
    </form>
</div>