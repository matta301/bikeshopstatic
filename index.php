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

	.bicycle-icon { margin-right: 0.5em; }
	.mdl-list__item { font-size: 14px; line-height: 24px; }
</style>

<div class="location-search">		
	<form action="index.php" method="post">
  		<div class="mdl-textfield mdl-js-textfield">
	    	<input id="user-location" class="mdl-textfield__input" type="text" name="location" id="sample3">
    	 	<label class="mdl-textfield__label" for="sample1"></label>
	  	</div>
	  	<p><?php echo $errMsg; ?></p>	  	
  		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="form-submit">
	</form>
</div>

<section class="mdl-grid">
	
	<div class="main-banner-container">
		<img class="" src="images/main-banner.jpg">
	</div>


	<div class="intro-container mdl-cell--6-col mdl-cell--3-offset" style="border:1px dotted firebrick;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--middle" style="border:1px dotted blue;">
				<h5>Morbi facilisis iaculis accumsan.</h5>
				<p>Maintaining a healthy, road worthy bike is very important as every cyclist or bike owner should know. It makes your ride that even more enjoyable. Regular servicing and tune ups will keep you riding safely and maximise the life span of your bicycle. Avoiding regular maintenance could turn into expensive and inconvenient repairs.</p>
			</div>
			<div class="mdl-cell mdl-cell--6-col" style="border:1px dotted blue;">
				<ul class="demo-list-icon mdl-list">
					<li class="mdl-list__item">
				    	<span class="mdl-list__item-primary-content">
					    	<i class="bicycle-icon material-icons">directions_bike</i>
					    	The only online bike shop comparison website.
						</span>
				  	</li>
				  	<li class="mdl-list__item">
					    <span class="mdl-list__item-primary-content">
						    <i class="bicycle-icon material-icons">directions_bike</i>
					    	Providing you with information on bike shops that offer repairs and services that is within your budget and area.
					  	</span>
				  	</li>
					<li class="mdl-list__item">
						<span class="mdl-list__item-primary-content">
							<i class="bicycle-icon material-icons">directions_bike</i>
							Bob Odenkirk
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>

	
		

</section>



























<?php require_once("footer.php"); ?>