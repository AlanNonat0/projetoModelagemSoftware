
// error function
function errors(request, title){
    var resp = JSON.parse(request.responseText);
    var errors = resp.errors
    var errorMessage = '';
    for(var i in errors){

        errorMessage = errors[i][0];
    }
    
    $("#error-title").html("");
    $("#error-status").html("");
    $("#error-message").html("");
    $("#error-title").html(title);
    $("#error-status").append("#"+request.status);
    $("#error-message").append(errorMessage);

    var options = {
        delay: 3000,
    };
    var showToast = document.getElementById('toastErrors');
    var bsToast = new bootstrap.Toast(showToast, options);
    bsToast.show();
}