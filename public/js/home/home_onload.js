function home_onload(){

    $.ajax({
        url: baseUrl+'search',
        type: "GET",
        data: {'home-search-input': ' '},
        dataType: "json",

        success: function (resp) {
            globalResp = [];

            var size = 8;
            for(let i = 0; i < resp.length; i+=size){
                globalResp.push(resp.slice(i,i+size));
            }

            rendering(globalResp);
            paginationRendering(globalResp)

        },
    });
}
$(window).on('load', function() {
    home_onload()
})
