$(document).ready(function(){
 
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var ventana_ancho = $(window).width();

		if(ventana_ancho >=992){
			var posicion =  (barra * 0.30);
		}else if(ventana_ancho<992){
			var posicion = (barra * 0.20);
		};
		
		$('.cuerpo').css({
			'background-position': '0 -' + posicion + 'px'
		});
 
	});
 
});