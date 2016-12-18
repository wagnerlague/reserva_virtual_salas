$(document).ready(function() {

    $('#summernote').summernote();

    $("#assunto").change(function(){
       validarQuantMinCaracteres($(this), 4);
    });
    
    $("#salvar").click(function(){
       if (validarSubmit()) {
          return false;
       }

    });
    
 });
 
 validarSubmit = function() {
   if (!$("#assunto").parent().hasClass("has-success") ||
       !$("#labelEmail").parent().hasClass("has-success")) {
      changeInputs();
      validarQuantMinCaracteresEmail();
      return true;
   }
   return false;
}

changeInputs = function() {
    $("[validated=true]").each(function( index ) {
        $( this ).change();
    });
}

validarQuantMinCaracteres = function(elem, quantCarac) {
   if ($(elem).val().length <= quantCarac) {
      $(elem).parent().removeClass("has-success").addClass("has-error");
      $(elem).parent().find(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-remove");
   } else {
      $(elem).parent().removeClass("has-error").addClass("has-success");
      $(elem).parent().find(".glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-ok");
   }
}

validarQuantMinCaracteresEmail = function() {
   if ($(".note-editable").html().length <= 11) {
      $("#labelEmail").parent().removeClass("has-success").addClass("has-error");
      $("#labelEmail").parent().find(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-remove");
   } else {
      $("#labelEmail").parent().removeClass("has-error").addClass("has-success");
      $("#labelEmail").parent().find(".glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-ok");
   }
}
