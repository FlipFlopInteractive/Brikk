(function(){

	var apiurl = "https://api.vimeo.com/";
	var totalitems;
	var items_per_page = 12;
	var currentPage;
	var menuClicked = false;

	function init(){

	/*if($("#container")[0] != undefined) {

		window.onload = function (){preloadCompleteHandler();};
	}*/


		$( ".info_icon" ).on( "click", function(){

			var member = $( this ).parent().parent();

			$( ".contact_overlay", member ).css({"bottom":"0"});
			$( ".info_icon", member ).css({"display":"none"});
			$( ".close_icon", member ).css({"display":"inherit"});

				$(".close_icon").on("click", function(){

					var memberClose = $( this ).parent().parent();

					$(".contact_overlay", memberClose).css({"bottom":"500px"});
					$(".info_icon", memberClose).css({"display":"inherit"});
					$(".close_icon", memberClose).css({"display":"none"});
				});

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

		


		// if($(".homepage")[0] != undefined) {
		// 	console.log('hello home');

		// 	// $.ajax({
		// 	// 	url: "https://api.twitter.com/1.1/search/tweets.json?src=typd&q=%40BRIKKSTUDIO?access_token=384791538-QPTr8cXMmHJS7AfABL386Z6ECp4IgBT2gaT019xr",
		// 	// 	type:'GET',
		// 	// 	dataType: 'json',
		// 	// 	error: apiError

		// 	// 	}).done(function(data){

		// 	// 		console.log(data);

		// 	// })
		// }

		$('#more').hide();
		if($("#cases")[0] != undefined) {
			console.log('hello world');

			$.ajax({
				url: apiurl + 'users/brikk/videos?access_token=c552e9eb6fd408122c1a11c21af5b30a',
				headers: {
					Accept: "application/vnd.vimeo.*+json;version=3.2"
				},
				type: 'GET',
				dataType: 'json',
				error: apiError
			}).done(function(data){

				totalitems = data.total;
				$('#more').show();
				$('#more').on('click', showMore);
				currentPage = 1;
				loadVideosOfPage(currentPage);
			})
		}

	}

	function loadVideosOfPage(page) {
		$.ajax({
				url: apiurl + 'users/brikk/videos?page=' + page + '&per_page=' + items_per_page + '&access_token=c552e9eb6fd408122c1a11c21af5b30a',
				headers: {
					Accept: "application/vnd.vimeo.*+json;version=3.2"
				},
				type: 'GET',
				dataType: 'json',
				error: apiError
		}).done(loadVideosOfPageSuccesHandler);
	}

	function loadVideosOfPageSuccesHandler(data) {

		var cases = $('#cases');
		//cases.empty();

		$.each(data.data, function(key,value) {

			if(key%4 === 0)
			{
				cases.append("<div class='row clearfix'>");
			}

			var lastRow = cases.children('.row').last();
			var biggestPicture = selectBiggestPicture(value);
			//lastRow.append("<div><a href='http://local.brikk.se/detailCase&videolink=" +encodeURIComponent(value.link) + "'><img class='Brikk_cases' src='"+ biggestPicture +"' /></a></div>");
			lastRow.append("<div><a href='http://local.brikk.se/detailCase'><img class='Brikk_cases' src='"+ biggestPicture +"' /></a></div>");
		}); 

		currentPage++;
		if(currentPage * items_per_page < totalitems)
		{
			$('#more').show();
		}
	}

	function selectBiggestPicture(value) {
		if(value.pictures.sizes[3]) return value.pictures.sizes[3].link;
		if(value.pictures.sizes[2]) return value.pictures.sizes[2].link;
		if(value.pictures.sizes[1]) return value.pictures.sizes[1].link;
		if(value.pictures.sizes[0]) return value.pictures.sizes[0].link;
	}

	function showMore() {
		$('#more').hide();

		if(currentPage * items_per_page < totalitems) {
			loadVideosOfPage(currentPage);
		}
		
	}

	function apiError(data) {
		console.log('OW SHIT: ', data);
	}

	function preloadCompleteHandler(){
		console.log("in complete");


		$(".preloader").css({"opacity":"1"});
		$("#preloaderAnimation").css({"display":"none"});

	}

init();

})();