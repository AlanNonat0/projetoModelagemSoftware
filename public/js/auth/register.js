$('form[name="formRegister"]').on("submit",  function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Accept": "application/json",
        },
    });

    $.ajax({
        url: baseUrl+"cadastrar",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {
            console.log(resp)
            window.location.href = baseUrl+"usuario/caderno";
        },
        error: function (request) {
            var title = 'Erro de Cadastro!'
            console.log(request)
           errorFromAjax(request,  title);
            
        }
    });
});
