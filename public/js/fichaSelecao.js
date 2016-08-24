$(document).ready(function () {

    $('#etapaPrimeira').on('click', function () {
        if($('#nome').val() == ''){
            $('#nome').focus();
            return false;

        }else if($('#cepEnvia').val() == ''){
            $('#cepEnvia').focus();
            return false;
        } else if($('#estado').val() == ''){
            $('#estado').focus();
            return false;
        } else if($('#cidade').val() == ''){
            $('#cidade').focus();
            return false;
        }else if($('#bairro').val() == ''){
            $('#bairro').focus();
            return false;
        } else if($('#rua').val() == ''){
            $('#rua').focus();
            return false;
        } else if($('#telefone').val() == ''){
            $('#telefone').focus();
            return false;
        }else if($('#identidade').val() == ''){
            $('#identidade').focus();
            return false;
        }else if($('#cpf').val() == ''){
            $('#cpf').focus();
            return false;
        }else if($('.data').val() == ''){
            $('.data').focus();
            return false;
        }else if($('#estado_civil').val() == ''){
            $('#estado_civil').focus();
            return false;
        }else if($('#grau_instrucao').val() == ''){
            $('#grau_instrucao').focus();
            return false;
        }else if($('#email').val() == ''){
            $('#email').focus();
            return false;
        }else if($('#observacao_escolaridade').val() == '' || $('#observacao_escolaridade').val() < 12 ){
            $('#observacao_escolaridade').focus();
            return false;
        }else if($('#observacao').val() == '' || $('#observacao').val() < 6 ){
            $('#observacao').focus();
            return false;
        }else{
            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);
        }

    });
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    /*$(".next-step").click(function (e) {



     }); */
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
    $('#cepEnvia').blur(function(){
        /* Configura a requisição AJAX */
        $.ajax({
            url : 'consultar_cep', /* URL que será chamada */
            type : 'GET', /* Tipo da requisição */
            data: 'cep=' + $('#cepEnvia').val(), /* dado que será enviado via POST */
            dataType: 'json', /* Tipo de transmissão */
            success: function(data){

                if(data.sucesso == 1){
                    $('#rua').val(data.rua);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.cidade);
                    $('#estado').val(data.estado);
                    $('#numero').focus();

                }
                if(data.sucesso == 2){

                    $('#cidade').val(data.cidade);
                    $('#estado').val(data.estado);

                }
            }
        });
        return false;
    });
    var masks = ['(00) 00000-0000', '(00) 0000-00009'];

    $('.data').mask('11/11/1111');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    //$('.phone').mask('0000-0000');
    //$('#telefone').mask('(00) 0000-0000');
    // $('.phone_us').mask('(000) 000-0000');
    //$('.mixed').mask('AAA 000-S0S');
    //$('#cpf').mask('000.000.000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.telefone').mask(masks[1], {onKeyPress:
        function(val, e, field, options) {
            field.mask(val.length > 14 ? masks[0] : masks[1], options) ;
        }
    });
    $('.cpf').mask('000.000.000-00', {reverse: true});
    //$('.money').mask('000.000.000.000.000,00', {reverse: true});

});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}



$(document).ready(function(){

});