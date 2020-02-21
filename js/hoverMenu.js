$(document).ready(function() {

	$('.menu-1').hover(function(){
		$('#aletaVerde').css({
			"height": "95px"
		});
	}, function(){
		$('#aletaVerde').css({
			"height": "0"
		});
	});


	$('.menu-2').hover(function(){
		$('#aletaRoja').css({
			"height": "95px"
		});
	}, function(){
		$('#aletaRoja').css({
			"height": "0"
		});
	});


	$('.menu-3').hover(function(){
		$('#aletaAzul').css({
			"height": "95px"
		});
	}, function(){
		$('#aletaAzul').css({
			"height": "0"
		});
	});

	$('.menu-4').hover(function(){
		$('#aletaAmarilla').css({
			"height": "95px"
		});
	}, function(){
		$('#aletaAmarilla').css({
			"height": "0"
		});
	});
	
});