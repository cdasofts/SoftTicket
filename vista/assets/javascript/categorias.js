
//Aqui se genera la funcionalidad del menu de categorias.

			$(document).ready(function() {

				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				//add active class on menu
				$('#menu').click(function(e) {
					e.preventDefault();
					$('categorias_cliente').removeClass('active');
					$(this).addClass('active');
				});
			//drop down menu	
					$(".drop-down").hover(function() {
						$('.mega-menu').addClass('display-on');
					});
					$(".drop-down").mouseleave(function() {
						$('.mega-menu').removeClass('display-on');
					});
			
			});

	 