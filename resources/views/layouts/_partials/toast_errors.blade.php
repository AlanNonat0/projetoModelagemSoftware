
<!-- Toast Erros -->
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
<div id="toastErrors" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-white bg-danger">
      <img src="{{ asset('img/exclam-white.png', true) }}" class alt="error" class="rounded me-2 bg-danger" width="15" height="14">
      <strong class="me-auto" id="error-title" >Erro!</strong>
      <small id="error-status"></small>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    
    <div class="toast-body"  id="error-message">
     
    </div>
</div>
</div>