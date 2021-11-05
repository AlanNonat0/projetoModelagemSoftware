
// error from request function
function errorFromAjax(request, title){
    let resp = JSON.parse(request.responseText);
    let errors = resp.errors
    let errorMessage = '';
    let statusCode = request.status;
    for(let i in errors){

        errorMessage = errors[i][0];
    }

    errorRendering(title, statusCode, errorMessage)
}


// error rendering function
function errorRendering(title, statusCode, errorMessage){

    $("#error-title").html("");
    $("#error-status").html("");
    $("#error-message").html("");
    $("#error-title").html(title);
    $("#error-status").append("#"+statusCode);
    $("#error-message").append(errorMessage);

    var options = {
        delay: 3000,
    };
    var showToast = document.getElementById('toastErrors');
    var bsToast = new bootstrap.Toast(showToast, options);
    bsToast.show();
}
