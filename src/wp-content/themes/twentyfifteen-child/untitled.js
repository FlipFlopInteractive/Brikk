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
			lastRow.append("<div><a href='./detailCase'><img class='Brikk_cases' src='"+ biggestPicture +"' /></a></div>");
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