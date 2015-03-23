(function(){

	var apiurl = "https://api.vimeo.com/";
	var totalitems;
	var items_per_page = 12;
	var currentPage;
	var menuClicked = false;

	var count = 1 ;

	function init(){

	$(".Brikk_members").on("click", info_clickHandler);
	$(".info_icon").on("click", info_clickHandler);
	$(".staff").on("click", categoryHandler1);
	$(".animation").on("click", categoryHandler2);
	$(".stopmotion").on("click", categoryHandler3);
	$(".cel").on("click", categoryHandler4);
	$(".live").on("click", categoryHandler5);
	$(".all").on("click", categoryHandler6);


	if($(".homepage")[0] != undefined) {

			$("#menu-item-73 a,#menu-item-756 a,#menu-item-876 a").css({
				
				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}


	if($(".showreel")[0] != undefined) {

			$("#menu-item-17 a,#menu-item-931 a,#menu-item-757 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}

	if($(".work")[0] != undefined) {
			
			$("#menu-item-16 a,#menu-item-754 a,#menu-item-756 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}

	if($(".contact")[0] != undefined) {

			$("#menu-item-14 a,#menu-item-752 a,#menu-item-775 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});	

	}

	if($(".about")[0] != undefined) {

			$("#menu-item-15 a,#menu-item-716 a,#menu-item-880 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}

	if($(".directors")[0] != undefined) {

			$("#menu-item-83 a,#menu-item-757 a,#menu-item-877 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}

	if($(".blog")[0] != undefined) {

			$("#menu-item-96 a,#menu-item-787 a,#menu-item-878 a").css({

				"color":"#FFA65E",
				"font-family":"brandon_grotesquebold"

			});

	}


	$(".all").css({

		"color":"#FFA65E",
		"font-family":"brandon_grotesquebold"
	});

	$(".animation,.staff,.stopmotion,.cel,.live").css({

		"color":"#707070",
		"font-family":"brandon_grotesque_regularRg"
	});


	$('#menu_icon').on("click",function(){

			if(menuClicked == false){

				console.log(menuClicked);

				$("#responsive_menu ul").css({"display":"inherit"});

				menuClicked = true;
			}

			else{

				if(menuClicked == true){
					console.log(menuClicked);
					$("#responsive_menu ul").css({"display":"none"});
					menuClicked = false;
				}
			}

	});


	function info_clickHandler(){

		var member = $( this ).parent().parent();

		$( ".contact_overlay", member ).css({"bottom":"0"});
		$( ".info_icon", member ).css({"display":"none"});
		$( ".close_icon", member ).css({"display":"inherit"});

			$(".close_icon").on("click", function(){

				var memberClose = $( this ).parent().parent();

				$(".contact_overlay", memberClose).css({"bottom":"600px"});
				$(".info_icon", memberClose).css({"display":"inherit"});
				$(".close_icon", memberClose).css({"display":"none"});
			});
	}


	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

				console.log("mobile");

    			$("#header").css({"height":"80px"});
				$(".logo").css({"top":"0"});
				$("#header").css({"position":"static"});
	}else{

		$(window).scroll(function (event) {
    		
    		var scroll = $(window).scrollTop();

    		if(scroll > 0){		
    	
				$("#header").css({"height":"60px"});
				$("#header").css({"position":"fixed"});
				$(".logo_brikk_fixed").addClass("display_block");
				$(".logo_static").addClass("display_none"); 
				$(".logo_animation").addClass("display_none");
				// $(".logo_animation").css({"display":"none"}); 
				$("#wrapper_logo").css({"width":"100px"});
				$("#wrapper_logo").css({"margin-top":"8px"});
				$("#navigation ul").css({"margin-top":"-32px"});
				$("#navigation li").css({"font-size":"0.7em"});

				$("#header").css({
						"-webkit-box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)",
						"-moz-box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)",
						"box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)"

				});
    		}

    		else if(scroll <= 0){

    			$("#header").css({"height":"80px"});
				$(".logo_static").removeClass("display_none"); 
				$(".logo_brikk_fixed").removeClass("display_block");
				$(".logo_animation").removeClass("display_none");
				// $(".logo_animation").css({"display":"none"});
				$("#header").css({"position":"inherit"});
				$("#wrapper_logo").css({"width":"170px"});
				$("#wrapper_logo").css({"margin-top":"0px"});
				$("#navigation ul").css({"margin-top":"-45px"});
				$("#navigation li").css({"font-size":"0.8em"});

				$("#header").css({
						"-webkit-box-shadow": "0px 0px 0px 0px rgba(110,110,109,0.58)",
						"-moz-box-shadow": "0px 0px 0px 0px rgba(110,110,109,0.58)",
						"box-shadow": "0px 0px 0px 0px rgba(110,110,109,0.58)"

				});
    		}
			
		});
		
	}

	}

	function categoryHandler1(element){

		$(".staff").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".stopmotion,.animation,.cel,.live,.all").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});



		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("1")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});

	}

	function categoryHandler2(){

		$(".animation").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".stopmotion,.staff,.cel,.live,.all").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});


		
		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("2")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});
	}

	function categoryHandler3(){

		$(".stopmotion").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".animation,.staff,.cel,.live,.all").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});
		
		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("3")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});
	}

	function categoryHandler4(){

		$(".cel").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".animation,.staff,.stopmotion,.live,.all").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});
		
		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("4")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});
	}

	function categoryHandler5(){

		$(".live").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".animation,.staff,.stopmotion,.cel,.all").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});
		
		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("5")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});
	}

	function categoryHandler6(){

		$(".all").css({

			"color":"#FFA65E",
			"font-family":"brandon_grotesquebold"
		});

			$(".animation,.staff,.stopmotion,.cel,.live").css({

			"color":"#707070",
			"font-family":"brandon_grotesque_regularRg"
		});
		
		$('.workGrid').each(function() {

    		var currentElement = $(this);

    		 if(currentElement.hasClass("6")){
    		 	currentElement.css({"display":"inline-block"});
    		 }else{
				currentElement.css({"display":"none"});
    		 }

		});
	}

init();

})();