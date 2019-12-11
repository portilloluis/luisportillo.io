$(document).ready(function(){
	
	//Abre el menu principal
	$("#toggleMenu").click(function(){
		$("nav").slideToggle("slow");
	})
	
	//Abre los menus secundarios
	$(".second").click(function(){
		var miSub = $(this).next();
		miSub.slideToggle("slow");
	})
});