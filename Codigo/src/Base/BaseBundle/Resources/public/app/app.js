$(document).ready(function () {
    $('#estado').change(function () {
        $.get('/lista-municipios', {estado: $(this).val()}, function (data) {
            $('#municipio option').remove();

            $.each(data, function (i, v) {
                $('#municipio').append(new Option(v, i));
            })
        })
    })

    $('#municipio').change(function () {
        $.get('/lista-bairros', {municipio: $(this).val()}, function (data) {
            $('#bairro option').remove();

            $('#bairro').append(new Option('Todos os bairros', ''));
            $.each(data, function (i, v) {
                $('#bairro').append(new Option(v, i));
            })
        })
    })

    $('#menu-estado li').remove()

    $('#estado option').each(function (i, v) {
        var id = $(this).val()
        var nome = $(this).text()
        var li = '<li><a href="/mudar-estado?estado=' + id + '">' + nome + '</a></li>'

        $('#menu-estado').append(li)
    })
});