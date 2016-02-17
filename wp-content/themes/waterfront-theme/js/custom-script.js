$(document).ready(function() 
{
	if (jQuery(window).width() <= 1024)
  	{  
		$('.container-list-main-category').click(function(e){
			// e.stopPropagation();
			// if (!$('.hover-list-shop-category').hasClass('display-block'))
			// {
			// 	$('.hover-list-shop-category').toggleClass('display-block');
			// 	$('.front-list-main-category').toggleClass('display-none')
			// }
			
		});
	}
	$(window).load(function(){
		var clothesHeightHover = $('ul.list-hover-category.clothes').innerHeight();
			console.log(clothesHeightHover);
		// var	vhClothesHover = clothesheightHover/2;
		// 	$('ul.list-hover-category.clothes').css("margin-top", -vhClothesHover);


		$('.container-time').each(function(){
			var dayID = $('.container-time').attr('id')
			// console.log(dayID);
			//$('ul.day-hours').find('.'+dayID).addClass('active');
			$('ul.day-hours').find('.'+dayID).find('span').addClass('active');
		});
		// Menu 
		$('#humber-menu-destop').click(function(){
	        $("#menu-desktop").toggleClass('open');
	        $("#menu-desktop").removeClass('close');
	        $('#close-menu-destop').toggleClass('open');
	        $('#humber-menu-destop').toggleClass('hide');
	        //$(".menu-mobile").toggle(500);
	        // $('html').toggleClass('active-overflow-hidding');
	    });

	    // $('html').click(function(){
	    // 	$(".container-time").removeClass('open');
	    // 	//console.log('open');
	    // });
	$(document).click(function(e){

		if ($(".container-time").hasClass('open')) 
		{
			$(".container-time").removeClass('open');
		}

	});
	    $('.icon-small-drop-down').click(function(e){
	    	 e.stopPropagation();
	    	$(".container-time").toggleClass('open');
	    	//console.log('open');
	    });

	     $("#close-menu,.menu a").click(function(){
	       //$(".menu-mobile").hide(500);
	       	$("#menu-desktop").toggleClass('open');
	       	$("#menu-desktop").addClass('close');
	        $('#close-menu-destop').toggleClass('open');
	        $('#humber-menu-destop').toggleClass('hide');
	  	});



  	});
	

	// $('.image_slide-button-next').click(function(){
	// 	ha
	// });
});