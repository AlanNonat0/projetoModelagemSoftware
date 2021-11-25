$('form[name="book-search"]').on("submit",  function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: baseUrl+"usuario/caderno/search",
        type: "GET",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {
            globalResp = [];
            isBook = true;

            var size = 8;
            for(let i = 0; i < resp.length; i+=size){
                globalResp.push(resp.slice(i,i+size));
            }

            let status = rendering(globalResp);
            paginationRendering(globalResp)

            if(status === false){
                book_onload()
            }

            $('.search-input').val("");
        },
        error: function (request) {
            var title = 'Erro de Busca!'
            errorFromAjax(request,  title);
            $('.search-input').val("");

        }
    });
});

