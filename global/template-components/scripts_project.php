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

function resizeBackground()
{

	let heightFigure = $(window).height()-$("header").height()-80;
	if(heightFigure < 500)
	{
		heightFigure = 500;
	}
	$(".imageBackgroundProject").css('height', heightFigure);

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

	let scroll = $(window).scrollTop();

	headerScroll(scroll);



		$( window ).resize(function() {
		if ($(window).width() <= 1023) 
		{
			var item = $(".collumn2");
			var itemprev = $(".collumn1");
			item.insertBefore(itemprev);
			$(".special_bg").css('padding-top', '0px');
		}
		else
		{
			var item = $(".collumn2");
			var itemprev = $(".collumn1");
			item.insertAfter(itemprev);		
			$(".special_bg").css('padding-top', '50px');				
		}
		});
		if ($(window).width() <= 1023) 
		{
			var item = $(".collumn2");
			var itemprev = $(".collumn1");
			item.insertBefore(itemprev);
			$(".special_bg").css('padding-top', '0px');				
		}


		$(".buttonCounterparty").hover(function() 
	  	{
	  		$(this).parent('.counterparty').css('border-color', '#f77835');
	  	});

		$(".buttonCounterparty").mouseout(function() 
	  	{
	  		$(this).parent('.counterparty').css('border-color', '#108b9d');
	  	});

		$(".coreMenu .active").click(function() 
	  	{

			let heightScroll = $(".imageBackgroundProject").height()+84;	
			$('html,body').animate({ scrollTop: heightScroll }, 'slow');
        	return false;
	  		
	  	});

	    $(window).scroll((event) => {
	        $(".subMenu").hide();

	        let scroll = $(window).scrollTop();



			if ($(window).width() >= 1024) 
			{

			headerScroll(scroll);

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



     var str= $(".textTitle p").text();

     var length = str.length;

     if(length > 70)
     {
     	var diffLength = length-70;
     	var toReplace = str.substr(-diffLength);

    	var n=str.replace(toReplace,'...<span style="display:none;">' + toReplace + '</span>');

    	$(".textTitle p").html(n);

     }


var hash = window.location.hash.substr(1);

if(hash.length > 1 && hash == "scroll")
{
	let heightScroll = $(".imageBackgroundProject").height()+84;	
	$('html,body').animate({ scrollTop: heightScroll }, 'slow');
	return false;
}

   $('.carouselSponsorsProjet').owlCarousel({
      loop:true,
      margin:10,
      mouseDrag: true,
      touchDrag: false,     
      responsiveClass:true,
      responsive:{
          0:{
              items:4,
              nav:true,
              mouseDrag: false,
              touchDrag: true
          },
          600:{
              items:5,
              nav:true
          },
          1024:{
              items:5,
              nav:true,
              loop:false
          }
      }
  })


});


    $('.revealBioSmile .content').on('scroll', function() {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {

        	var html = '<div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-9 medium-9 large-9 cell text">Alain Bernard<br>22 juin 2017 </div><div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-9 medium-9 large-9 cell text">Alain Bernard<br>22 juin 2017 </div><div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-9 medium-9 large-9 cell text">Alain Bernard<br>22 juin 2017 </div>';
            $(".revealBioSmile .content .grid-x").append(html);
        }
    })

    $('.revealDonator .content').on('scroll', function() {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {

        	var html = '<div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-6 medium-7 large-7 cell text"><span class="nameCounterparty">Une carte postale</span><br/>Alain Bernard - 22 juin 2017  </div><div class="small-3 medium-2 large-2 cell price">37 €</div><div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-6 medium-7 large-7 cell text"><span class="nameCounterparty">Une carte postale</span><br/>Alain Bernard - 22 juin 2017  </div><div class="small-3 medium-2 large-2 cell price">37 €</div><div class="small-3 medium-3 large-3 cell img"><img src="https://placehold.it/40x40/888?text=icone fleche"/></div><div class="small-6 medium-7 large-7 cell text"><span class="nameCounterparty">Une carte postale</span><br/>Alain Bernard - 22 juin 2017  </div><div class="small-3 medium-2 large-2 cell price">37 €</div>';
            $(".revealDonator .content .grid-x").append(html);
        }
    })



	             


	function headerScroll(scroll)
	{

			let heightMenu = $(".imageBackgroundProject").height()-77;	
			let heightMenu80 = heightMenu+80;
			let heightMenu160 = heightMenu+160;
			$('.containerMenubio .profilPicture img').css('bottom', '4px');	
				
			if(scroll < heightMenu)
			{
	  		$('.containerMenubio .profilPicture img').css('height', '146px');
	  		$('.containerMenubio .profilPicture img').css('width', '146px');
			}
			if(scroll > heightMenu && scroll < heightMenu80)
			{
			var pos = scroll-heightMenu;
			var height = 146-pos;
	  		$('.containerMenubio .profilPicture img').css('height', height);
	  		$('.containerMenubio .profilPicture img').css('width', height);
	  

			}
			if(scroll > heightMenu80)
			{
		    $('.containerMenubio .profilPicture img').css('height', '76px');	
	  		$('.containerMenubio .profilPicture img').css('width', '76px');
			}
	        if(scroll < heightMenu80)
	        {
		 		$('header').css('top', 0);

		    }
		    else
		    {
  			 if(scroll > heightMenu80)
  			 {
  			 var pos = scroll-heightMenu80;
  			 $('header').css('top', -pos);

	  		
	  
	  		}
			 if(scroll > heightMenu160)
			 {
				 $(".bio").css('margin-top', '86px');
				 $(".menubio").addClass('fixedMenubio');

			 }




		 }
	 	if(scroll < heightMenu160)
		{
		 	$(".bio").css('margin-top', '0px');
			$('.menubio').removeClass('fixedMenubio');		
			
		}


	}



	 $( ".gd-video-play" ).click(function() 
	 {
	 	$(this).fadeOut();
	 	$(this).next('video')[0].play();
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