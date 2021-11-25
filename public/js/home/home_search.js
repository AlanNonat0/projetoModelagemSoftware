$('form.home-search').on("submit",  function (event) {
    event.preventDefault();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: baseUrl+"search",
        type: "GET",
        data: $(this).serialize(),
        dataType: "json",

        success: function (resp) {
            globalResp = [];
            isBook = false;

            var size = 8;
            for(let i = 0; i < resp.length; i+=size){
                globalResp.push(resp.slice(i,i+size));
            }

           if(rendering(globalResp) === false){
               home_onload()
           }
            paginationRendering(globalResp)

            $('#home-search-input').val("");
        },
        error: function (request) {
            var title = 'Erro de Busca!'

            errorFromAjax(request,  title);
            $('#home-search-input').val("");
        }
    });
});
