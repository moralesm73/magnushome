$(document).ready(function() {

	$('#icoWhat').hover(function(){
		$('#whCapa1').css({
			"transform": "rotate(40deg)"
		});

		$('#whCapa2').css({
			"transform": "rotate(-15deg)"
		});
	}, function(){
		$('#whCapa1').css({
			"transform": "rotate(0deg)"
		});

		$('#whCapa2').css({
			"transform": "rotate(0deg)"
		});
	});


	$('#icoInst').hover(function(){
		$('#igCapa1').css({
			"transform": "rotate(40deg)"
		});

		$('#igCapa2').css({
			"transform": "rotate(-15deg)"
		});
	}, function(){
		$('#igCapa1').css({
			"transform": "rotate(0deg)"
		});

		$('#igCapa2').css({
			"transform": "rotate(0deg)"
		});
	});


	$('#icoFace').hover(function(){
		$('#fbCapa1').css({
			"transform": "rotate(40deg)"
		});

		$('#fbCapa2').css({
			"transform": "rotate(-15deg)"
		});
	}, function(){
		$('#fbCapa1').css({
			"transform": "rotate(0deg)"
		});

		$('#fbCapa2').css({
			"transform": "rotate(0deg)"
		});
	});
	
});