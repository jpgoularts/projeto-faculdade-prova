$(document).ready(function(){
	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
	};
	
	$('.paciente').mask(SPMaskBehavior, spOptions);

	$('.navbar-toggler').click(function(){
		$(this).toggleClass('open');
	});

	$('.carousel-banners.owl-carousel').owlCarousel({
		loop:true,
		nav:false,
		items:1,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:false
	});

	$('.carousel-products .owl-carousel').owlCarousel({
		loop:true,
		nav:false,
		items:4,
		dots: false,
		responsive:{
			0:{
					items:1,
			},
			575:{
					items:2,
			},
			767:{
					items:3,
			},
			1200:{
					items:4,
			}
		},
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false,
	});

	$(window).on('scroll', function(){
		if($(window).scrollTop() > 5) {
			$('header').addClass('header-active');
		} else {
			$('header').removeClass('header-active');
		}
	});

	$(document).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $(".whatsapp").delay(2000).addClass("bt-closed");
        } else {
          $(".whatsapp").removeClass("bt-closed");
        }
	});
	


	/* CONTADOR */
	(function($){
		$(window).on("load",function(){
			$(document).scrollzipInit();
			$(document).rollerInit();
		});
		$(window).on("load scroll resize", function(){
			$('.numscroller').scrollzip({
				showFunction    :   function() {
										numberRoller($(this).attr('data-slno'));
									},
				wholeVisible    :     false,
			});
		});
		$.fn.scrollzipInit=function(){
			$('body').prepend("<div style='position:fixed;top:0px;left:0px;width:0;height:0;' id='scrollzipPoint'></div>" );
		};
		$.fn.rollerInit=function(){
			var i=0;
			$('.numscroller').each(function() {
				i++;
			   $(this).attr('data-slno',i); 
			   $(this).addClass("roller-title-number-"+i);
			});        
		};
		$.fn.scrollzip = function(options){
			var settings = $.extend({
				showFunction    : null,
				hideFunction    : null,
				showShift       : 0,
				wholeVisible    : false,
				hideShift       : 0,
			}, options);
			return this.each(function(i,obj){
				$(this).addClass('scrollzip');
				if ( $.isFunction( settings.showFunction ) ){
					if(
						!$(this).hasClass('isShown')&&
						($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.showShift)>($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))&&
						($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))<($(this).outerHeight()+$(this).offset().top-settings.showShift)
					){
						$(this).addClass('isShown');
						settings.showFunction.call( this );
					}
				}
				if ( $.isFunction( settings.hideFunction ) ){
					if(
						$(this).hasClass('isShown')&&
						(($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.hideShift)<($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))||
						($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))>($(this).outerHeight()+$(this).offset().top-settings.hideShift))
					){
						$(this).removeClass('isShown');
						settings.hideFunction.call( this );
					}
				}
				return this;
			});
		};
		function numberRoller(slno){
				var min=$('.roller-title-number-'+slno).attr('data-min');
				var max=$('.roller-title-number-'+slno).attr('data-max');
				var timediff=$('.roller-title-number-'+slno).attr('data-delay');
				var increment=$('.roller-title-number-'+slno).attr('data-increment');
				var numdiff=max-min;
				var timeout=(timediff*500)/numdiff;
				//if(numinc<10){
					//increment=Math.floor((timediff*1000)/10);
				//}//alert(increment);
				numberRoll(slno,min,max,increment,timeout);
				
		}
		function numberRoll(slno,min,max,increment,timeout){//alert(slno+"="+min+"="+max+"="+increment+"="+timeout);
			if(min<=max){
				$('.roller-title-number-'+slno).html(min);
				min=parseInt(min)+parseInt(increment);
				setTimeout(function(){numberRoll(eval(slno),eval(min),eval(max),eval(increment),eval(timeout))},timeout);
			}else{
				$('.roller-title-number-'+slno).html(max);
			}
		}
	})(jQuery);
});
