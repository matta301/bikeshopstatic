<?php 

	$url = file_get_contents("https://spreadsheets.google.com/feeds/list/1DgePfAxco-xVy2VdrfxkyPs3W1R5ZL5B-7zKgVf8DzI/od6/public/values?alt=json");



?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<title>Post Code Map Marker</title>
  	<style type="text/css">

  		input { text-transform: uppercase; }
  		.results-table tr th {
		    background: #0089BD;
		    text-align: center;
		    padding: 1.5em 0em;
		    text-transform: uppercase;
		    font-weight: 700;
		    color: #fff;
		    width: 28%;
		    font-size: 1em;
		}
		.error {
			color: red;
		}

		#map {
			width: 100%;
			height: 450px;
			border: 1px solid red;
			margin: 0 auto;
		}
  	</style>



</head>
<body>

	<section class="shop-info" style="width: 960px; margin: 0 auto; border: 1px solid tomato;">



		<div id="map"></div>
	</section>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmIa_gm6Kr_5wCd_dnBDwvPtnNdHPHDtE"></script>
<script>


	var queries = {};
  	$.each(document.location.search.substr(1).split('&'),function(c,q){

    	var i = q.split('=');
    	queries[i[0].toString()] = i[1].toString();

  	});

  	postcode = queries.address.replace(/%20/g, ' ');
  	var shopName = queries.shopname.replace(/%20/g, ' ');



	function postCode(postcode) {

		// Google API Key
		var key 	 = "AIzaSyAmIa_gm6Kr_5wCd_dnBDwvPtnNdHPHDtE";
		// Parameters added to google maps address to retun data as JSON object
		var jsonData = "https://maps.googleapis.com/maps/api/geocode/json?address=" + postcode + "&key=" + key + "";

		$.getJSON(jsonData, function(data) {

			// Checks that user input exists
			if (data.results.length != 0) {

				var results = data.results;
				console.log(results);

				for (var i = 0; i < results.length; i++) {

					// Returns lat/lng of address that is entered
					var latitude  = results[i].geometry.location.lat;
					var longitude = results[i].geometry.location.lng;

					console.log(latitude);

					// Stores Lat and Long in array to be used in placing map marker
					var latLng = {lat: latitude, lng: longitude };

					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 15,
						center: latLng
					});

					var marker = new google.maps.Marker({
			          position: latLng,
			          map: map
			        });


				} // End of for i

			}else {

				// Error message if a valid postcode is not entered
				$('.error').html('No results found Please enter a valid post code');

			}
		});
	}

	postCode(postcode);


</script>
</body>
</html>