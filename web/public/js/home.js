$(document).ready(function() {
    if (screen.width < 992 || document.documentElement.clientWidth < 992) {
		esconderConteudoCards();
		$(".card-header").click(function(){
			mostrarEsconder($(this));
		});
	}
});

esconderConteudoCards = function() {
	$(".row-cards").find(".card-block").hide();
	$(".row-cards").find(".invisible").removeClass("invisible");
}

mostrarEsconder = function(elem) {
	var aberto = ($(elem).find(".glyphicon-triangle-top").size() == 1);
	if (aberto) {
		$(elem).parent().find(".card-block").hide();
		$(elem).find(".glyphicon-triangle-top").removeClass("glyphicon-triangle-top").addClass("glyphicon-triangle-bottom");
	} else {
		$(elem).parent().find(".card-block").show();
		$(elem).find(".glyphicon-triangle-bottom").removeClass("glyphicon-triangle-bottom").addClass("glyphicon-triangle-top");
	}
}