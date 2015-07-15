( function( $, window, document, undefined ){

	var apiurl = 'https://api.vimeo.com/';
	var totalitems;
	var items_per_page = 12;
	var currentPage;
	var menuClicked = false;
	var count = 1 ;

	function initialize(){

		// Vimeo Header logic
		$( '.VimeoHeader' ).baselinefy();

		var vimeoBackground = $( '.VimeoHeader .background_wrapper' );
	 	if( vimeoBackground.attr( 'data-clip' )){
			$( vimeoBackground ).vimeofy({

				'url': vimeoBackground.attr( 'data-clip' ),
				'color': '#00D8D8',
				'autoplay': true,
				'loop': true,
				'delay': 0
			});
	 	}

		// Navigation logic
		$('.Brikk_members').on('click', info_clickHandler);
		$('.info_icon').on('click', info_clickHandler);
		$('.staff').on('click', categoryHandler1);
		$('.animation').on('click', categoryHandler2);
		$('.stopmotion').on('click', categoryHandler3);
		$('.cel').on('click', categoryHandler4);
		$('.live').on('click', categoryHandler5);
		$('.all').on('click', categoryHandler6);

		$('p').html(function(i,h){
				return h.replace(/&nbsp;/g,' ');
		});

		$('h1').html(function(i,h){
				return h.replace(/&nbsp;/g,' ');
		});

		$('h2').html(function(i,h){
				return h.replace(/&nbsp;/g,' ');
		});

		if($('.homepage')[0] !== undefined) {

			$('#menu-item-1091 a,#menu-item-756 a,#menu-item-876 a').css({
				
				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});
		}

		if($('.showreel')[0] !== undefined) {

			$('#menu-item-1095 a,#menu-item-931 a,#menu-item-857 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});
		}

		if($('.work')[0] !== undefined) {
				
			$('#menu-item-1094 a,#menu-item-754 a,#menu-item-856 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});
		}

		if($('.contact')[0] !== undefined) {

			$('#menu-item-1092 a,#menu-item-752 a,#menu-item-875 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});	
		}

		if($('.about')[0] !== undefined) {

			$('#menu-item-1093 a,#menu-item-716 a,#menu-item-880 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});
		}

		if($('.directors')[0] !== undefined) {

			$('#menu-item-1090 a,#menu-item-757 a,#menu-item-877 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'

			});
		}

		if($('.blog')[0] !== undefined) {

			$('#menu-item-1089 a,#menu-item-787 a,#menu-item-878 a').css({

				'color':'#FFA65E',
				'font-family':'brandon_grotesquebold'
			});
		}


		$('.all').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

		$('.animation,.staff,.stopmotion,.cel,.live').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});


		$('#menu_icon').on('click',function(){

			if(menuClicked === false){

				console.log(menuClicked);

				$('#responsive_menu ul').css({'display':'inherit'});

				menuClicked = true;

			} else {

				if(menuClicked === true){
					console.log(menuClicked);
					$('#responsive_menu ul').css({'display':'none'});
					menuClicked = false;
				}
			}
		});

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

			$('#header').css({'height':'80px'});
			$('.logo').css({'top':'0'});
			$('#header').css({'position':'static'});

		}else{

			$(window).scroll(function (event) {
					
				var scroll = $(window).scrollTop();

				if(scroll > 0){		
			
					$('#header').css({'height':'60px'});
					$('#header').css({'z-index':'90'});
					$('#header').css({'position':'fixed'});
					$('.logo_brikk_fixed').addClass('display_block');
					$('.logo_static').addClass('display_none'); 
					$('#awwwards').css({'display':'none'}); 
					$('.logo_animation').addClass('display_none');
					// $('.logo_animation').css({'display':'none'}); 
					$('#wrapper_logo').css({'width':'100px'});
					$('#wrapper_logo').css({'margin-top':'8px'});
					$('#navigation ul').css({'margin-top':'-32px'});
					$('#navigation li').css({'font-size':'0.7em'});				

					$('#header').css({
						'-webkit-box-shadow': '0px 1px 0px 0px rgba(110,110,109,0.58)',
						'-moz-box-shadow': '0px 1px 0px 0px rgba(110,110,109,0.58)',
						'box-shadow': '0px 1px 0px 0px rgba(110,110,109,0.58)'
					});

				} else if( scroll <= 0 ){
					
					$('#awwwards').css({'display':'block'});
					$('#header').css({'height':'80px'});
					$('#header').css({'z-index':'0'});
					$('.logo_static').removeClass('display_none'); 
					$('.logo_brikk_fixed').removeClass('display_block');
					$('.logo_animation').removeClass('display_none');
					// $('.logo_animation').css({'display':'none'});
					$('#header').css({'position':'inherit'});
					$('#wrapper_logo').css({'width':'170px'});
					$('#wrapper_logo').css({'margin-top':'0px'});
					$('#navigation ul').css({'margin-top':'-45px'});
					$('#navigation li').css({'font-size':'0.8em'});

					$('#header').css({

						'-webkit-box-shadow': '0px 0px 0px 0px rgba(110,110,109,0.58)',
						'-moz-box-shadow': '0px 0px 0px 0px rgba(110,110,109,0.58)',
						'box-shadow': '0px 0px 0px 0px rgba(110,110,109,0.58)'
					});
				}
			});
		}

		if( $( '.about' )[0] !== undefined ){

			var styles = [
				{
					stylers: [
						{ hue: '#00ffe6' },
						{ saturation: -100 }
					]
				},{
					featureType: 'road',
					elementType: 'geometry',
					stylers: [
						{ lightness: 100 },
						{ visibility: 'simplified' }
					]
				},{
					featureType: 'road',
					elementType: 'labels',
					stylers: [
						{ visibility: 'on' }
					]
				}
			];

			var styledMap = new google.maps.StyledMapType( styles,{ name: 'Styled Map' });

			// Create a map object, and include the MapTypeId to add
			// to the map type control.
			var mapOptions = {
				zoom: 17,
				center: new google.maps.LatLng(59.320867, 18.065029),
				disableDefaultUI: true,
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
				}
			};
			var map = new google.maps.Map(document.getElementById('map-canvas'),
				mapOptions);

			/*var image = 'images/marker/brikk_marker_google.png';*/
			var myLatLng = new google.maps.LatLng(59.320867, 18.065029);
			var beachMarker = new google.maps.Marker({
					icon:		 {
					path:			'M10.8,3.4c-0.4,0-0.9,0.3-1.2,0.6l-6.5,7.7C2.9,12,2.7,12.6,2.7,13v11.5c0,0.4,0.3,0.7,0.7,0.7h32.9c0.4,0,0.9-0.3,1.2-0.6l6.5-8.1c0.3-0.3,0.5-0.9,0.5-1.3V4.2c0-0.4-0.3-0.7-0.7-0.7H10.8z M11.3,7.7c0.3-0.3,0.8-0.6,1.2-0.6h24.8c0.4,0,0.5,0.3,0.3,0.6l-2.3,2.8c-0.3,0.3-0.8,0.6-1.2,0.6H9.2c-0.4,0-0.5-0.3-0.3-0.6L11.3,7.7z M6.4,15.6c0-0.4,0.3-0.7,0.7-0.7h26c0.4,0,0.7,0.3,0.7,0.7v5.3c0,0.4-0.3,0.7-0.7,0.7h-26c-0.4,0-0.7-0.3-0.7-0.7V15.6z M38,18.2c-0.3,0.3-0.5,0.2-0.5-0.2v-3.6c0-0.4,0.2-1,0.5-1.3l2.3-2.8c0.3-0.3,0.5-0.2,0.5,0.2V14c0,0.4-0.2,1-0.5,1.3L38,18.2z',
					fillColor:		'#000000',
					fillOpacity:	1,
					strokeWeight:	0
				},
				position: myLatLng,
				map: map,
				/*icon: image*/
			});

			//Associate the styled map with the MapTypeId and set it to display.
			map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');
			google.maps.event.addDomListener(window, 'load', initialize);
		}
	}

	initialize();

	function info_clickHandler(){

		var member = $( this ).parent().parent();

		$( '.contact_overlay', member ).css({'bottom':'0'});
		$( '.info_icon', member ).css({'display':'none'});
		$( '.close_icon', member ).css({'display':'inherit'});

		$('.close_icon').on('click', function(){

			var memberClose = $( this ).parent().parent();

			$('.contact_overlay', memberClose).css({'bottom':'600px'});
			$('.info_icon', memberClose).css({'display':'inherit'});
			$('.close_icon', memberClose).css({'display':'none'});
		});
	}

	function categoryHandler1(element){

		$('.staff').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.stopmotion,.animation,.cel,.live,.all').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});



		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('1')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});

	}

	function categoryHandler2(){

		$('.animation').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.stopmotion,.staff,.cel,.live,.all').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});


		
		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('2')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});
	}

	function categoryHandler3(){

		$('.stopmotion').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.animation,.staff,.cel,.live,.all').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});
		
		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('3')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});
	}

	function categoryHandler4(){

		$('.cel').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.animation,.staff,.stopmotion,.live,.all').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});
		
		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('4')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});
	}

	function categoryHandler5(){

		$('.live').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.animation,.staff,.stopmotion,.cel,.all').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});
		
		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('5')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});
	}

	function categoryHandler6(){

		$('.all').css({

			'color':'#FFA65E',
			'font-family':'brandon_grotesquebold'
		});

			$('.animation,.staff,.stopmotion,.cel,.live').css({

			'color':'#707070',
			'font-family':'brandon_grotesque_regularRg'
		});
		
		$('.workGrid').each(function() {

				var currentElement = $(this);

				 if(currentElement.hasClass('6')){
				 	currentElement.css({'display':'inline-block'});
				 }else{
				currentElement.css({'display':'none'});
				 }

		});
	}

})( jQuery, this, this.document );