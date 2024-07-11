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

// confirmar antes de deletar
$('.deletar').on('click', function(e){
    e.preventDefault();
    
    var link = $(this).attr('href');
    alert(link);
    // if(confirm('Deseja mesmo apagar esse dado?')){}
});