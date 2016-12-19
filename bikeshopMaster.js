
	// Google Autocomplete
	function autoComplete() {

		// Google autocomplete
		var input = document.getElementById('user-location');

		var options = {
		   types: ['(regions)'],
		   componentRestrictions: { country: 'gb' }
		};
		
		var autocomplete = new google.maps.places.Autocomplete(input,options);
	}



	// 

	function displayShop() {
		

		// Empty array to store query string data
		var queries = {};

		// Loops over query strings and splits 
	  	$.each(document.location.search.substr(1).split('&'),function(c,q){

	    	var i = q.split('=');
	    	queries[i[0].toString()] = i[1].toString();

	  	});

	  	var postcode = queries.address.replace(/%20/g, ' ');
	  	var shopName = queries.shopname.replace(/%20/g, ' ');

	  	console.log(postcode);
	  	console.log(shopName);


	  	document.querySelector('.shop-title').innerHTML = shopName;


	




	}