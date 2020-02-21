$(document).ready(function() {

	$('#imagen1').hover(function(){
		$('#relleno1').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno1').css({
			"transform": "rotate(15deg)"
		});
	});


	$('#imagen2').hover(function(){
		$('#relleno2').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno2').css({
			"transform": "rotate(-20deg)"
		});
	});


	$('#imagen3').hover(function(){
		$('#relleno3').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno3').css({
			"transform": "rotate(18deg)"
		});
	});

	$('#imagen4').hover(function(){
		$('#relleno4').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno4').css({
			"transform": "rotate(59deg)"
		});
	});

	$('#imagen5').hover(function(){
		$('#relleno5').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno5').css({
			"transform": "rotate(-15deg)"
		});
	});

	$('#imagen6').hover(function(){
		$('#relleno6').css({
			"transform": "rotate(0deg)"
		});
	}, function(){
		$('#relleno6').css({
			"transform": "rotate(58deg)"
		});
	});
	
});