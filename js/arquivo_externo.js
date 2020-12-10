$(document).ready(function () {



    $('#estados').change(function() {

        var id_estado = $('#estados').val();
        console.log(id_estado);

        $.post(
            "ajax_cidades.php",
            {"id_estado": id_estado},

            function(dados, situacao) {
                if(situacao == "sucess"){
                    $('#cidades').html(dados);
                }
            }

        );

    });

} );