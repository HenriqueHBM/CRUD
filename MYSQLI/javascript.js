$('#formCadastro').on('submit', function(e){
    e.preventDefault();
    alert('ola')
    return $(this).serialize();
    // let dados = $(this).serialize();

    // $.ajax({
    //     url: 'Controllers/CadastroController.php',
    //     type: 'post',
    //     dataType: 'html',
    //     data: dados,
    //     success: function (dados) {
    //         $('.resultado').show().html(dados)
    //     }
    // })
});