$(document).on("submit", ".save-recipe", function (evt) {
    evt.preventDefault();
    let recipeId = $(this).find('input[name="recipe_id"]').val();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "Accept": "application/json",
        },
    });

    $.ajax({
        url: baseUrl + "usuario/caderno/save",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {

            if(resp.code === 201) {

                errorRendering("Sucesso", 201, "Receita salva com sucesso");
            }
            if(resp.code === 200) {
                if(isBook){
                    $(document).find('#recipeRender_'+recipeId).remove();
                }
                errorRendering("Sucesso", 201, "Receita removida com sucesso");
            }


        },
        error: function (request) {
            if (request.status === 401) {
                errorRendering(
                    "Entre para salvar receitas",
                    401,
                    "Cadastre-se e aproveite"
                );
            } else {
                var title = "Erro ao salvar receita!";
                errorFromAjax(request, title);
            }
        },
    });
});
