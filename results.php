<?php
	session_start();

	$sessionLocation = $_SESSION['location'];

	$errMsg = $output = '';

	// Page meta details
	$pageTitle = 'Search your location';
	$pageClass = 'results';


	require_once("header.php");

?>
<style type="text/css">
	/* Results Page */
	.results-page .mdl-data-table__cell--non-numeric.mdl-data-table__cell--non-numeric,
	.results-page .shop-info table th { text-transform: uppercase; text-align: center; }
	.results-page .shop-info table td { text-align: center; }
	.results-page .shop-info button { color: #fff; text-decoration: none; }
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
					
					<?php spreadsheetData($sessionLocation); ?>

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