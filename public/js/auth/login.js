$('form[name="formLogin"]').on("submit", function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            Accept: "application/json",
        },
    });

    $.ajax({
        url: baseUrl + "autenticar",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {
            window.location.href = baseUrl + "usuario/caderno";
        },
        error: function (request) {
            var title = "Erro ao entrar!";
            errorFromAjax(request, title);
        },
    });
});
