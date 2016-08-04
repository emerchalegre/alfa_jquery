function checkRegexp(o, regexp, n) {
    if (!(regexp.test(o.val()))) {
        o.addClass("ui-state-error");
        //updateTips(n);
        return false;
    } else {
        return true;
    }
}
$(document).ready(function () {
    $('#tabs').easytabs();
    $('#datanascimento').datepicker();
    $('#telefone').inputmask('(99) 9999[9]-9999');
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var email = $( "#email" );
    $("#email").blur(function () {
        email.removeClass( "ui-state-error" );
        checkRegexp(email, emailRegex);
    });

    $("#cidade").selectBoxIt({
        populate: ['Selecione uma cidade']
    });
    $("#estado").selectBoxIt({
        populate: ['Selecione uma cidade']
    });
    $.getJSON('assets/json/estados-cidades.json', function (data) {

        var populate = [];
        $.each(data.estados, function (key, val) {
            populate.push({
                value: val.sigla,
                text: val.nome

            });
        });

        $("#estado").data("selectBox-selectBoxIt").add(populate);
        $('#estado').change(function (v) {
            if ($(this).val() != 'Selecione um estado') {
                var sigla = $(this).val();
                $("#cidade").data("selectBox-selectBoxIt").remove();
                var filtro = data.estados.filter(function (valor) {
                    return valor.sigla == sigla;
                });

                if (filtro.length > 0) {
                    var cidades = [];
                    cidades.push({
                        value: 'Selecione uma cidade',
                        text: 'Selecione uma cidade'

                    });
                    $.each(filtro[0].cidades, function (key, val) {
                        cidades.push({
                            value: val,
                            text: val

                        });
                    });
                    $("#cidade").data("selectBox-selectBoxIt").add(cidades);
                }
            }
        });
    });

});