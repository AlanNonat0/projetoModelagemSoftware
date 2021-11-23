function book_onload(){

    $.ajax({
        url: baseUrl+"usuario/caderno/search",
        type: "GET",
        data: {'search': ' '},
        dataType: "json",

        success: function (resp) {
            globalResp = [];

            var size = 8;
            for(let i = 0; i < resp.length; i+=size){
                globalResp.push(resp.slice(i,i+size));
            }

            if(globalResp.length <= 0){
                $('#recipeRender').html(`
                <div class="row d-flex justify-content-center mt-4">
                    <div class=" col-lg-8 col-12 col-sm-12 col-xl-8">
                        <h1 class='text-white text-center'>Suas receitas salvas aparecerão aqui</h1>
                    </div>
                </div>`)

            } else {
                rendering(globalResp);
                paginationRendering(globalResp)
            }

        },
    });
}
$(window).on('load', function() {
    book_onload()
})
