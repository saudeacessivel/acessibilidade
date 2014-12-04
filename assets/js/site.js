// JavaScript Document
$(document).ready(function() {

	$(window).on('scroll', function () {
		var alturaMaxima = $('.topo .conteudo').height();
		if(($(window).scrollTop() > alturaMaxima) && (!$('body').hasClass('mobile'))){
			$('.menu').addClass('fixed');
		}
		else{
			$('.menu').removeClass('fixed');
		}
	});

	$( window ).resize(function() {
		if($( window ).width() <= 650 ){
			$('body').addClass('mobile');
		}
		else{
			$('body').removeClass('mobile');
		}
	}).trigger('resize');

	
	$('a.scroll-to').on('click', function(e){
        e.preventDefault();
        var scroll = $(this).attr('href');


        $('html,body').animate({
          scrollTop: ($(scroll).offset().top - 67),
        },
        { 
          duration: 1000, 
          complete: function(){
            $(scroll).find('h4 a:first').focus();
          }
        });
      });

	$('a.scroll-to-interna').on('click', function(e){
        e.preventDefault();
        var scroll = $(this).attr('href');


        $('html,body').animate({
          scrollTop: ($(scroll).offset().top - 67),
        },
        { 
          duration: 1000, 
          complete: function(){
            $(scroll).find('h1 a:first').focus();
          }
        });
      });


	$('a.scroll-to-form').on('click', function(e){
		e.preventDefault();
		var scroll = $(this).attr('href');
		

		$('html,body').animate({
			scrollTop: ($(scroll).offset().top - 67),
		},
		{ 
			duration: 1000, 
			complete: function(){
				$(scroll).find('input:first').focus();
			}
		});
	});

	$('a.scroll-top').click(function(){
		if($('#conteudo-hospitais').length){
			$('html,body').animate({
				scrollTop: ($('#conteudo-hospitais').offset().top - 67),
			},
			{ 
				duration: 1000, 
				complete: function(){
					$('#conteudo-hospitais').find('h4 a:first').focus();
				}
			});
		}else{
			$('html,body').animate({
				scrollTop: ($('#mapa').offset().top - 67),
			},
			{ 
				duration: 1000, 
				complete: function(){
					$('#mapa').find('p:first').focus();
				}
			});
		};
	});
	
	$('.ajustar-fonte').on('click', function(e){
		e.preventDefault();
		var tamMaximo = 22;
		var tamMinimo = 10;
		var ajuste = 1;
		var tamAtual = parseInt($('body').css('font-size'));
		if($(this).data('tipo') == '+'){
			if(tamAtual < tamMaximo){
				$('body').css('font-size', tamAtual+ajuste);
			}
		}
		else{
			if(tamAtual > tamMinimo){
				$('body').css('font-size', tamAtual-ajuste);
			}
		};
		/*console.log(parseInt(tamAtual));*/
	});

});

/*
if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}
*/

