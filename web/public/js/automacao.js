$(document).ready(function() {
	$("#btn-prox-tab-1").click(function(){
    	$("#tab2").click();
    });

	$("#btn-ant-tab-2").click(function(){
    	$("#tab1").click();
    });

    $("#btn-prox-tab-2").click(function(){
    	$("#tab3").click();
    });

    $("#visualizar").click(function(){
    	validarVisualizacao();
    });

	$(".btnRemoveLineMsg").hide();
	
	addEventOnBtn();
});

addEventOnBtn = function() {
	$(".btnAddLineMsg").click(function(){
   		addLineMsg($(this));
   	});

   	$(".btnRemoveLineMsg").click(function(){
   		removeLineMsg($(this));
   	});

   	$('[data-toggle="tooltip"]').tooltip();

   	$(".mensagem").change(function(){
       validarValueDifNull($(this));
    });

    $(".envio").change(function(){
       validarValueDifNull($(this));
    });
}

addLineMsg = function(elem){
	var selecionado = $(elem).parent().parent().find("#envio").val();
	var clone = $(elem).parent().parent().clone();
	$(".btnAddLineMsg").hide();
	$(".btnRemoveLineMsg").show();
	$(".panel-body").find("select").prop("disabled", true);
	$(".panel-body").append(clone);
	
	addEventOnBtn();
   	removeItensCombo(selecionado);
   	validarClone()
}

removeItensCombo = function(selecionado) {
	$("select:last").find("option").each(function( index ) {
  		if (parseInt($(this).val()) <= parseInt(selecionado)) {
  			$("select:last").find("option[value="+$(this).val()+"]").remove();
  		}
	});
}

validarClone = function() {
	if ($("select:last").val() == $("select:last").find("option:last").val()){
		$(".btnAddLineMsg").hide();
	}
}

removeLineMsg = function(elem) {
	$(elem).parent().parent().remove();
}

validarVisualizacao = function() {
	$("#imgLink").change();
    $("#tituloCadastro").change();  
   	if ($("#imgLink").parent().hasClass("has-success") &&
        $("#tituloCadastro").parent().hasClass("has-success")) {
   	    window.open('./paginaCadastro.html', '_blank');
   	}
}