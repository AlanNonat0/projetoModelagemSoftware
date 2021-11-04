var globalResp = [];
var atualPage = 1;

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

            var size = 8;
            for(let i = 0; i < resp.length; i+=size){
                globalResp.push(resp.slice(i,i+size));
            }

            rendering(globalResp);
            paginationRendering(globalResp)

            $('#home-search-input').val("");
        },
        error: function (request) {
            var title = 'Erro de Busca!'

            errors(request,  title);
            $('#home-search-input').val("");
        }
    });
});

// Renderiza o componente de paginação
function paginationRendering(resp){

    let pagination = '';
    let pages = '';

    for(var i = 1; i <= resp.length; i++){
        if(atualPage != i){
            pages += `<li class="page-item ">
                <button id="page_`+i+`" onClick="paginate(`+ i +`)" class="page-link">`+ i +`</button>
            </li>`;
        } else {
            pages += `<li class="page-item active">
            <button id="page_`+i+`" onClick="paginate(`+ i +`)" class="page-link">`+ i +`</button>
        </li>`;
        }
    }

     pagination = `
     <li class="page-item"  id="first">
        <button onClick="paginate(1)" class="page-link">Primeiro</button>
    </li>
        `+pages+`
     <li class='page-item' id="last"><button onClick="paginate(`+resp.length+`)" class="page-link">Ultmo</a></li>`;

     $('.pagination').html(pagination);

    if(atualPage == resp.length){
       $('#last').addClass('disabled');
    }

    if(atualPage == 1){
        $('#first').addClass('disabled');
    }
}

// Faz a navegação entre paginas
function paginate(page){
    let resp = globalResp;

    atualPage = page

    rendering(resp, page-1);
    paginationRendering(resp);
    window.scrollTo(0, 480);
}

// renderiza as receitas na tela
function rendering(resp, page = 0){
    $('#recipeRender').html("");
    $('.pagination').html("");
    let html = '';

    recipes = resp[page];
    if (!recipes) {
        alert('Pesquisa não encontrada')
        home_onload();
        return
    }
    for(let i = 0; i< recipes.length; i++) {
    
        html += `

        <div class="col-lg-3 col-sm-6 pb-2" id="recipeRender">
            <div class="card border border-dark" style="height: 367.84px !important;">
            <img src="`+baseUrl+`storage/recipe/`+recipes[i].image+`" class="card-img-top recipeimage" alt="`+recipes[i].name+`" style="min-height: 206.84px !important">
            <div class="card-body">
                <h5 class="card-title">`+recipes[i].name+`</h5>
                <p class="card-text">`+recipes[i].description+`</p>
                <div class="d-flex justify-content-end">
                    <a href="preparo?id=`+recipes[i].id+`" class="btn-block btn btn-outline-dark btn-sm">Confira aqui</a>
                </div>

            </div>
            </div>
        </div>`;
    }

    $('#recipeRender').html(html)
}
