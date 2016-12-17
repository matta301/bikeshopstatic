<?php
	session_start();

	$sessionLocation = $_SESSION['location'];

	$errMsg = $output = '';

	// Page meta details
	$pageTitle = 'Search your location';
	$pageClass = 'results';


	require_once("header.php");

?>
<div class="mdl-grid">
	
	<!-- Left Advert -->
	<div class="align-right mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">		
		<img class="show-large" src="images/placeholder.png" alt="">		
	</div>

	<!-- Results Table -->
	<div class="shop-info mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<h1>Your Results</h1>

			<table class="results-table mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%;">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric"><h5>Bike Shop</h5></th>
						<th class="mdl-data-table__cell--non-numeric"><h5>Basic Service</h5></th>
						<th class="mdl-data-table__cell--non-numeric"><h5>Workshop</h5></th>
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

<?php require_once("footer.php"); ?>