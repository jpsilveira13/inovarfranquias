/**
 * Created by Joao Paulo on 12/05/2016.
 */
$(document).ready(function () {

    $('#estado_id').on('change',function(e){

        var estado_id = $(this).find('option:selected').attr('id');
        console.log(estado_id);


        $.get('/pega-cidade/' + estado_id, function(data){
            $('#cidade_id').empty();
            $('#cidade').append('<option value="" >Seleciona uma opção...</option>');
            $.each(data, function(index, cidade){

                $('#estado_id').append('<option value="'+cidade.nome+'" id="'+cidade.nome+'" >'+cidade.nome+'</option>');

            });

        });

    });
});