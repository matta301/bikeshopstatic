    <div class="line-divider mdl-shadow--2dp">
	
</div>

				<footer class="mdl-mini-footer">
					<div class="mdl-mini-footer__left-section">
						<div class="mdl-logo">
						&copy; <?php echo date('Y'); ?> www.bikeshopcompare.com
						</div>
						<ul class="mdl-mini-footer__link-list">
							<li><a href="">Home</a></li>
							<li><a href="">T &amp; C's</a></li>
							<li><a href="">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="mdl-mini-footer__right-section">
						<button class="mdl-mini-footer__social-btn">
							<a href=""><img src="images/facebook.png" alt="facebook" /></a>
						</button>
						<button class="mdl-mini-footer__social-btn">
							<a href=""><img src="images/twitter.png" alt="facebook" /></a>
						</button>
						<button class="mdl-mini-footer__social-btn">
							<a href=""><img src="images/google.png" alt="facebook" /></a>
						</button>
					</div>
				</footer>

			</div>
  		</main>
	</div>



	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmIa_gm6Kr_5wCd_dnBDwvPtnNdHPHDtE&libraries=places"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmIa_gm6Kr_5wCd_dnBDwvPtnNdHPHDtE"></script>-->
	<script type="text/javascript" src="bikeShopMaster.js"></script>
	<script type="text/javascript">


		// Document Ready
		$(function() {

			var segment_str = window.location.pathname; // return segment1/segment2/segment3/segment4
			var segment_array = segment_str.split( '/' );
			var urlSegment = segment_array.pop();
			console.log(urlSegment);

			if (urlSegment == 'index.php' || ) {
				
				// Runs Google Maps Autocomplete
				autoComplete();

			};

		});



		



	</script>
<!--	<script>

	
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
		autoComplete();*/

</script>
-->

	</body>
</html>