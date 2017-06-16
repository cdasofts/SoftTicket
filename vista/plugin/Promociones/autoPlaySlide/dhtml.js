$(window).load(function(){
		var pages = $('#container2 li'), current=0;
		var currentPage,nextPage;
		var timeoutID;
		var button2Clicked=0;

		var handler1=function(){
			button2Clicked=1;
			$('#container2 .button2').unbind('click');
			currentPage= pages.eq(current);
			if($(this).hasClass('prevbutton2'))
			{
				if (current <= 0)
					current=pages.length-1;
				else
					current=current-1;
				nextPage = pages.eq(current);	

				nextPage.css("marginLeft",-604);
				nextPage.show();
				nextPage.animate({ marginLeft: 0 }, 800,function(){
					currentPage.hide();
				});
				currentPage.animate({ marginLeft: 604 }, 800,function(){
					$('#container2 .button2').bind('click',handler1);
				});
			}
			else
			{

				if (current >= pages.length-1)
					current=0;
				else
					current=current+1;
				nextPage = pages.eq(current);	

				nextPage.css("marginLeft",604);
				nextPage.show();
				nextPage.animate({ marginLeft: 0 }, 800,function(){
				});
				currentPage.animate({ marginLeft: -604 }, 800,function(){
					currentPage.hide();
					$('#container2 .button2').bind('click',handler1);
				});
			}		
		}

		var handler2=function(){
			if (button2Clicked==0)
			{
			$('#container2 .button2').unbind('click');
			currentPage= pages.eq(current);
			if (current >= pages.length-1)
				current=0;
			else
				current=current+1;
			nextPage = pages.eq(current);	
			nextPage.css("marginLeft",604);
			nextPage.show();
			nextPage.animate({ marginLeft: 0 }, 800,function(){
			});
			currentPage.animate({ marginLeft: -604 }, 800,function(){
				currentPage.hide();
				$('#container2 .button2').bind('click',handler1);
			});
			timeoutID=setTimeout(function(){
				handler2();	
			}, 4000);
			}
		}

		$('#container2 .button2').click(function(){
			clearTimeout(timeoutID);
			handler1();
		});

		timeoutID=setTimeout(function(){
			handler2();	
			}, 4000);
		
});


 $("#imagen1").animatedModal({
                modalTarget:'animatedModal',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });

                        $("#imagen2").animatedModal({
                modalTarget:'animatedModal02',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });


                        $("#imagen3").animatedModal({
                modalTarget:'animatedModal03',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });