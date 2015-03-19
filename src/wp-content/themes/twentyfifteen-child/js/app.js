(function(){

	var apiurl = "https://api.vimeo.com/";
	var totalitems;
	var items_per_page = 12;
	var currentPage;
	var menuClicked = false;

	var count = 1 ;

	function init(){

		
	// var $container = $('.rowWorks').isotope({

	// });	

	// 	$('.filters').on( 'click', 'a', function(e) {

	// 		e.preventDefault();

	// 	 	var filterValue = $(this).attr('data-filter');
 //  			$container.isotope({ filter: filterValue });
	// 	});




	$(".Brikk_members").on("click", info_clickHandler);
	$(".info_icon").on("click", info_clickHandler);

	$(".staff").on("click", categoryHandler1);
	$(".animation").on("click", categoryHandler2);
	$(".stopmotion").on("click", categoryHandler3);
	$(".cel").on("click", categoryHandler4);
	$(".live").on("click", categoryHandler5);
	$(".all").on("click", categoryHandler6);


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
				$(".logo_brikk_fixed").css({"display":"block"}); 
				$(".logo_static").css({"display":"none"}); 
				$(".logo_animation").css({"display":"none"}); 
				$("#wrapper_logo").css({"width":"100px"});
				$("#wrapper_logo").css({"margin-top":"8px"});
				$("#navigation ul").css({"margin-top":"-32px"});
				$("#navigation li").css({"font-size":"0.6em"});

				$("#header").css({
						"-webkit-box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)",
						"-moz-box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)",
						"box-shadow": "0px 1px 0px 0px rgba(110,110,109,0.58)"

				});
    		}

    		else if(scroll <= 0){

    			$("#header").css({"height":"80px"});
				$(".logo_static").css({"display":"block"}); 
				$(".logo_brikk_fixed").css({"display":"none"});
				$(".logo_animation").css({"display":"inherit"});
				$("#header").css({"position":"inherit"});
				$(".logo_animation").css({"display":"none"});
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

	function categoryHandler1(){

		$(".1").css({"display":"inline-block"});
		$(".2").css({"display":"none"});
		$(".3").css({"display":"none"});
		$(".4").css({"display":"none"});
		$(".5").css({"display":"none"});
		$(".6").css({"display":"none"});

	}

	function categoryHandler2(){
		$(".1").css({"display":"none"});
		$(".2").css({"display":"inline-block"});
		$(".3").css({"display":"none"});
		$(".4").css({"display":"none"});
		$(".5").css({"display":"none"});
		$(".6").css({"display":"none"});
	}

	function categoryHandler3(){
		$(".1").css({"display":"none"});
		$(".2").css({"display":"none"});
		$(".3").css({"display":"inline-block"});
		$(".4").css({"display":"none"});
		$(".5").css({"display":"none"});
		$(".6").css({"display":"none"});
	}

	function categoryHandler4(){
		$(".1").css({"display":"none"});
		$(".2").css({"display":"none"});
		$(".3").css({"display":"none"});
		$(".4").css({"display":"inline-block"});
		$(".5").css({"display":"none"});
		$(".6").css({"display":"none"});
	}

	function categoryHandler5(){
		$(".1").css({"display":"none"});
		$(".2").css({"display":"none"});
		$(".3").css({"display":"none"});
		$(".4").css({"display":"none"});
		$(".5").css({"display":"inline-block"});
		$(".6").css({"display":"none"});
	}

	function categoryHandler6(){
		$(".1").css({"display":"inline-block"});
		$(".2").css({"display":"inline-block"});
		$(".3").css({"display":"inline-block"});
		$(".4").css({"display":"inline-block"});
		$(".5").css({"display":"inline-block"});
		$(".6").css({"display":"inline-block"});
	}

init();

})();