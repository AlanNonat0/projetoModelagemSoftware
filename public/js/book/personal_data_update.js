
$('form[name="personalDataUpdate"]').on("submit",  function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Accept": "application/json"
        },
    });

    $.ajax({
        url: baseUrl+"usuario/atualizar",
        type: "PATCH",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {

            var data = resp.data;
            var date = data.updated_at.slice(0, 10);
            date = date.split('-')
            date = date[2]+'-'+date[1]+'-'+date[0];

            errorRendering('Parabéns '+data.name, 201, 'Dados atualizados com sucesso');
            $('.user-telephone').html(data.telephone);
            $('.user-update').html(date);
            $('.form-control').val("");
            $('#telephone').focus();
        },
        error: function (request) {
            var title = 'Erro ao Atualizar dados!'
            errorFromAjax(request,  title);

        }
    });
});
