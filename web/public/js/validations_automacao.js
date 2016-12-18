$(document).ready(function() {
    $("#nome").change(function(){
       validarQuantMinCaracteres($(this), 4);
    });
    
    $("#tituloCadastro").change(function(){
       validarQuantMinCaracteres($(this), 5);
    });

    $("#imgLink").change(function(){
       validarQuantMinCaracteres($(this), 5);
    });

    $("#inativar").change(function(){
       validarValueDifNull($(this));
    });

    $(".mensagem").change(function(){
       validarValueDifNull($(this));
    });

    $(".envio").change(function(){
       validarValueDifNull($(this));
    });
    
    /*$("#salvar").click(function(){
       if (validarSubmit()) {
          return false;
       }
    });*/
 });
 
 //Rever
 /*validarSubmit = function() {
   if (!$("#nome").parent().hasClass("has-success") ||
       !$("#email").parent().hasClass("has-success") ||
       !$("#automacao").parent().hasClass("has-success")) {
      changeInputs();
      return true;
   }
   return false;
}*/

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

validarValueDifNull = function(elem, quantCarac) {
   if ($(elem).val().length == null || $(elem).val().length == "") {
      $(elem).parent().removeClass("has-success").addClass("has-error");
      $(elem).parent().find(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-remove");
   } else {
      $(elem).parent().removeClass("has-error").addClass("has-success");
      $(elem).parent().find(".glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-ok");
   }
}

validarEmail = function(elem){
    var str = $(elem).val();
    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(filtro.test(str)) {
        $(elem).parent().removeClass("has-error").addClass("has-success");
        $(elem).parent().find(".glyphicon").removeClass("glyphicon-remove").addClass("glyphicon-ok");
    } else {
        $(elem).parent().removeClass("has-success").addClass("has-error");
        $(elem).parent().find(".glyphicon").removeClass("glyphicon-ok").addClass("glyphicon-remove");
    }
}