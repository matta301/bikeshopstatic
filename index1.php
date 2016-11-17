<?php 

 	$pageTitle = 'Home |';
	
	$userLocation = $errMsg = '';

	// Submit Button 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// converts user input to lowercase
		$userLocation = strtolower($_POST['location']);
		
		// If the user input is empty then message prompt is displayed
		if ($userLocation == '' || $userLocation == null) {

			$errMsg = "Please enter a location";

		}else {
			
			// If there is user input session is started and redirected to the results page
			session_start();			
			$_SESSION['location'] = $userLocation;

			header('Location: results.php');
		}
	}

	require_once("header.php"); 

?>
<style type="text/css">
	
	.location-search {
		position: absolute;
		left: 20%;
	}


</style>

<div class="location-search">		
	<form action="index1.php" method="post">
  		<div class="mdl-textfield mdl-js-textfield">
	    	<input id="user-location" class="mdl-textfield__input" type="text" name="location" id="sample3">
    	 	<label class="mdl-textfield__label" for="sample1"></label>
	  	</div>
	  	<p><?php echo $errMsg; ?></p>	  	
  		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="form-submit">
	</form>
</div>


<div class="shop-info mdl-cell mdl-cell--6-col mdl-cell--3-offset" style="border:1px dotted firebrick;">

</div>




























<?php require_once("footer.php"); ?>