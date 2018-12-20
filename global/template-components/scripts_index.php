    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/jquery.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/foundation.js"></script>
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/app.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.core.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.keyboard.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.motion.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.timer.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.imageLoader.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.touch.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.orbit.min.js"></script>
   	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation-datepicker.min.js"></script>	
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation-datepicker.fr.js"></script>	  
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/owl.carousel.min.js"></script>     
	<script type="text/javascript">
	 /* BEGIN : MENU DROPDOWN & MOBILE */
		var dropdown = document.getElementsByClassName("dropdown_mobile");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		    this.classList.toggle("active_drop");
		    var dropdownContent = this.nextElementSibling;
		    if (dropdownContent.style.display === "block") {
		      dropdownContent.style.display = "none";
		    } else {
		      dropdownContent.style.display = "block";
		    }
		  });
		}
	/* END : MENU DROPDOWN & MOBILE */
		
		/* function slideNumber() {
		  var $slides = $('.orbit-slide');
		  var $activeSlide = $slides.filter('.is-active');
		  var activeNum = $slides.index($activeSlide) + 1;


		  if(activeNum == 1)
		  {

		  }
		  else
		  {
		  	$('video')[0].pause();
		  }
		} */

function resizeBackground()
{
	// Calcul du ratio
	let heightFigure = $(window).height()-$("header").height();

	$(".imgBackground").css('width', $(window).width());
	$(".imgBackground").css('height', heightFigure);
	$(".orbit-wrapper, .orbit-figure, .orbit-container").css('height', heightFigure);

}


$(document).ready(function()
{
	if($(window).width() >= 1024)
	{

		resizeBackground();

	    $(window).resize((event) => {

			resizeBackground();

	    }); 

    }

   $('.carouselPartenaires, .carouselMobileCCM').owlCarousel({
      loop:true,
      margin:10,
      mouseDrag: true,
      touchDrag: false,     
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              mouseDrag: false,
              touchDrag: true
          },
          600:{
              items:1,
              nav:true
          },
          1024:{
              items:4,
              nav:true,
        	  margin: 120,
        	  center:true,
              loop:true,
          }
      }
  })

   $('.carouselPartenairesMobile').owlCarousel({
      loop:true,
      margin:10,
      mouseDrag: true,
      touchDrag: false,     
      responsiveClass:true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1,
              nav:false,
              mouseDrag: false,
              touchDrag: true
          },
          600:{
              items:1,
              nav:false
          },
          1024:{
              items:5,
              nav:true,
              loop:false
          }
      }
  })


/* $('[data-orbit]').on('slidechange.zf.orbit', slideNumber);


	if ($(window).width() <= 800) 
	{
		var heightVideo = $(".videoSliderAccueil").height();
		$(".orbit-container, .orbit-figure").css('height', heightVideo);
	}
 */




    $(window).scroll((event) => {

        $(".subMenu").hide();

        let scroll = $(window).scrollTop();

        /*
		if (($(".sliderAccueil").length > 0)){

		if ($(window).width() > 1024) 
		{

	        if(scroll > 85)
	        {
	          $('video')[0].pause();
	        }
	        else
	        {
		        var $slides = $('.orbit-slide');
				var $activeSlide = $slides.filter('.is-active');
				var activeNum = $slides.index($activeSlide) + 1;

				if(activeNum == 1)
				{
		          $('video')[0].play();
				}
	        }	

        }
        else
        {
	        if(scroll > 150)
	        {
	          $('video')[0].pause();
	        }
	        else
	        {
		        var $slides = $('.orbit-slide');
				var $activeSlide = $slides.filter('.is-active');
				var activeNum = $slides.index($activeSlide) + 1;

				if(activeNum == 1)
				{
		          $('video')[0].play();
				}
	        }		        	
        }

        }
        */

		if ($(window).width() > 1024) 
		{
			


	        if (scroll > 310) { // display the menu
	            $('.goToTop').show({
	                duration: 400
	            });
	        } else { // hide the menu
	            $('.goToTop').hide({
	                duration: 400
	            });
	        }
        }
      
    });




});





	$(".videoSoundButton").click(function() 
	{

		var video = document.querySelector('video');

		if(video.muted)
		{
			$(".videoSoundButton").children('div').attr('class', 'gd-video-sound-off');
		video.muted = false;
		} else 
		{
			$(".videoSoundButton").children('div').attr('class', 'gd-video-sound');	  	
		video.muted = true;
		}

	});



	$(".goToTop").click(function() 
  	{
		$('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;

  	});

	


	  $( ".subMenuLink" ).hover(function() 
	  {

	  	if($(".subMenu3").css('display') != 'none' )
	  	{
	  		$(".subMenu3").hide();
	  	}

	  	var idLink = $(this).attr('id');


		if(idLink == "subMenuProfil")
	  	{
		   $( "#subMenuProfil .profilContainer" ).toggleClass('withArrowProfilBottom', 'withArrowProfil');	

	  	   var widthMenu = $("#subMenuProfil").width();
	  	   var widthMenu2 = widthMenu;
	  	   if(widthMenu < 200)
	  	   {
	  	   	widthMenu = 200;
	  	   }
   		 	$( this ).children( "div" ).css("width", widthMenu);
   		 	var position = $("#subMenuProfil").offset();
   		 	var diff = 200-widthMenu2;
   		 	var leftPosition = position.left-10;
   		 	var widthDocument = $(document).width();

   		 	var calcul = widthMenu + position.left;

   		 	if(calcul > widthDocument)
   		 	{
   		 		var diff = calcul-widthDocument;
   		 		var leftPosition = leftPosition-diff+10;

   		 	}

   		 	$( this ).children( "div" ).css("left", leftPosition);
	  	}
	  	else
	  	{
   		 	var position = $( this ).offset();
   		 	$( this ).children( "div" ).css("padding-left", position.left);
	     	$( this ).children( "a:first-child" ).toggleClass('withArrowBottom', 'withArrow');		
	  	}

   		 $( this ).children( "div" ).show();
   		 $( this ).children("a:first-child").addClass('activeMenuSubMenu');

  	  }, function() 
  	  {
  	  	var idSubMenu = this.id;
  	  	var classNextElement = $(':hover').last().attr('class');
  
  	  
  	  		var element = this;
  	  		if(idSubMenu == "subMenuProfil")
  	  		{
  	  			$( element ).children( "div" ).hide();  	  	
			   	$( element ).children("a:first-child").removeClass('activeMenuSubMenu'); 	
		   	   	$( "#subMenuProfil .profilContainer" ).removeClass('withArrowProfilBottom');	
		   	   	$( "#subMenuProfil .profilContainer" ).addClass('withArrowProfil');	
  	  		}
  	  		else
  	  		{
	  	  		$( this ).children( "div" ).hide();
		   		$( this ).children("a:first-child").removeClass('activeMenuSubMenu'); 
		   	   	$( ".subMenuLink .lienMenu" ).removeClass('withArrowBottom');	
		   	   	$( ".subMenuLink .lienMenu" ).addClass('withArrow');	
  	  		}
  		
  	  	
  	  	
	  		
  	  
  	  });


		$(".searchInputHeader .gd-search").click(function() 
	  	{
    		$('.borderEffect').focus();
	  	});

		$(".gd-slider-arrow-bottom").click(function() 
	  	{
  			$('html,body').animate({ scrollTop: $(".underSlideHomePage").offset().top-78}, 'slow');
	  	});



		$(".linkFooter").click(function() 
	  	{
	  		var link = this;

		  	if($(link).next('.subMenuFooter').css('display') == 'none' )
		  	{
				  $(link).next('.subMenuFooter').slideDown();
		  	}
		  	else
		  	{
				  $(link).next('.subMenuFooter').slideUp();
		  	}

	  	});



		$(".logoMenu").click(function() 
	  	{
		  	if($(".menuLeftMobile").css('display') == 'none' )
		  	{
		   			$(".menuLeftMobile").show({
			             duration: 400
			        });	
		  	}
		  	else
		  	{
				   $(".menuLeftMobile").hide({
			             duration: 400
			        });	  		
		  	}


	  	});


	</script>