<?php
	session_start();
	
	//var_dump($_SESSION['location']);




	// If session details have not been set then the page is redirected back to index
	/*if (!isset($_SESSION['location'])) {
		header('Location: index1.php');
	}*/


	$url  	= file_get_contents("https://spreadsheets.google.com/feeds/list/1DgePfAxco-xVy2VdrfxkyPs3W1R5ZL5B-7zKgVf8DzI/od6/public/values?alt=json");
	$json 	= json_decode($url, true);

	$errMsg = $output = '';

	// Page meta details
	$pageTitle = 'Search your location';
	$pageClass = 'results';



	require_once("header.php");
?>
<style type="text/css">
	
	.mdl-data-table__cell--non-numeric.mdl-data-table__cell--non-numeric,
	.shop-info table th { text-transform: uppercase; text-align: center; }
	.shop-info table td { text-align: center; }
	.shop-info button { color: #fff; text-decoration: none; }
	.align-right { text-align: right; }
	.align-left { text-align: left; }
</style>


<div class="mdl-grid">
	
	<!-- Left Advert -->
	<div class="align-right mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">		
		<img src="images/placeholder.png" alt="">		
	</div>

	<!-- Results Table -->
	<div class="shop-info mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%;">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric"><h5>Vivamus sit</h5></th>
					<th class="mdl-data-table__cell--non-numeric"><h5>magna eget</h5></th>
					<th class="mdl-data-table__cell--non-numeric"><h5>Suspendisse</h5></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php // Loop through Whole JSON data
				foreach ($json as $value) {

					if (isset($value["entry"])) {
						// Loops through the entry object where all the data is contained
						foreach ($value["entry"] as $data) {						
						
							$city = strtolower($data["gsx\$city"]["\$t"]);
							$county = strtolower($data["gsx\$county"]["\$t"]);
							$postCode = strtolower($data["gsx\$postcode"]["\$t"]);
							$shopName = $data["gsx\$shopname"]["\$t"];
							$shopDescription = $data["gsx\$description"]["\$t"];


							// City, county and postcode data from google sheets is compared with users input to find any occurances
							if (strpos($_SESSION['location'], $city) !== false || strpos($_SESSION['location'], $county) !== false || strpos($_SESSION['location'], $postCode) !== false ) {

								// String that is generated that list all shops from users input
								$output  = 	'<tr>';
								$output .=		'<td>' . $shopName . '</td>';
								$output .= 		'<td>£30</td>';
								$output .= 		'<td>30</td>';
								$output .= 		'<td>';
								$output .= 			'<a href="shop-profile.php?address=' . $postCode . '&shopname=' . $shopName . '">';
								$output .=				'<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">BUY NOW</button>';
								$output .=			'</a>';
	                            $output .=  	'</td>';
								$output .= 	'</tr>';

								echo $output;

							}
						}
					}
				}
			?>
			</tbody>
		</table>
		<p><?php echo $errMsg;?></p>
	</div>
	
	<!-- Right Advert -->
	<div class="align-left mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">		
		<img src="images/placeholder.png" alt="">		
	</div>

</div>	







	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
	<!--<script>

		// https://spreadsheets.google.com/feeds/list/1DgePfAxco-xVy2VdrfxkyPs3W1R5ZL5B-7zKgVf8DzI/od6/public/values?alt=json

		var url = "https://spreadsheets.google.com/feeds/list/1DgePfAxco-xVy2VdrfxkyPs3W1R5ZL5B-7zKgVf8DzI/od6/public/values?alt=json"

	   $.ajax({
            type: 'GET',
            url: url,
            success: function (data) {
                putIntoObjects(data);

            },
            fail: function (data) {

            }

    	});



	   	function putIntoObjects(data) {

	   		output = '';

            for (var i in data.feed.entry) {

                var text = data.feed.entry[i].content.$t;

                var county = data.feed.entry[i].gsx$county.$t;
				var city = data.feed.entry[i].gsx$city.$t;
              	var shopName = data.feed.entry[i].gsx$shopname.$t;
              	var description = data.feed.entry[i].gsx$description.$t;
              	/*var email = data.feed.entry[i].gsx$email.$t;
              	var gender = data.feed.entry[i].gsx$gender.$t;*/

              	/*console.log("Fastname : ", city);
              	console.log("lastname : ", lastname);
				console.log("email : ", email);
				console.log("Gender : ", gender);*/

				output += '<tr>';
				output += 	'<td>' + county + '</td>';
				output += 	'<td>' + city + '</td>';
				output +=	'<td>' + shopName + '</td>';
				output +=	'<td>' + description + '</td>';
				output += '</tr>';
            }

            //$(output).insertAfter('.table-header');





		}
	</script>-->
<?php require_once("footer.php"); ?>