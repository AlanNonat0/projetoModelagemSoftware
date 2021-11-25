
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
function rendering(resp,page = 0){
    $('#recipeRender').html("");
    $('.pagination').html("");
    let html = '';

    recipes = resp[page];

    if (!recipes) {
        errorRendering('Erro de Busca!', 404, 'Receita não encontrada')
       return false;
    }

    for(let i = 0; i< recipes.length; i++) {

        let recipeId = isBook? recipes[i].recipe_id :recipes[i].id;
        html += `

        <div class="col-lg-3 col-sm-6 pb-2" id="recipeRender_`+recipeId+`">
        <form class="save-recipe">
        <div class="card border border-dark" style="height: 367.84px !important;">

        <img src="`+baseUrl+`storage/recipe/`+recipes[i].image+`" class="card-img-top recipeimage" alt="`+recipes[i].name+`" style="min-height: 206.84px !important">
        <div class="card-body">
            <h5 class="card-title">`+recipes[i].name+`</h5>
            <p class="card-text text-inline">`+recipes[i].description+`</p>

            <div class=" mb-auto float-start col-2">
            <input type="hidden" value="`+recipeId+`" name="recipe_id"/>
            <button type="submit"  class="btn btn-outline-light float-left"><img class="img-fluid save-recipe-image" src="`+baseUrl+`img/salvar.png" alt="Salvar" width="24" height="24"></button>
        </div>
            <div class="my-auto d-flex justify-content-end">
                <a href="`+baseUrl+`preparo/`+recipeId+`" class="btn-block btn btn-outline-dark btn-sm">Confira aqui</a>
            </div>

        </div>
        </div>
        </form>
    </div>`;
    }

    $('#recipeRender').html(html)
}
