
$('form[name="form-new-recipe"]').on("submit",  function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Accept": "application/json"
        },
    });

    $.ajax({
        url: baseUrl+"usuario/receita",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {
            errorRendering('Sucesso', 201, 'Receita cadastrada com sucesso');
            window.location.href = baseUrl + "usuario/caderno";
        },
        error: function (request) {
            var title = 'Erro ao enviar receita!'
            errorFromAjax(request,  title);
            
        }
    });
});
