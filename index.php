<?php 
	

 	$pageTitle = 'Home |';
 	$pageClass = 'home-page';
	
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
<div class="parallelogram"></div>


<div class="location-search">		
	<form action="index.php" method="post">
  		<div class="mdl-textfield mdl-js-textfield">
  			<span>Search</span>
	    	<input id="user-location" class="mdl-textfield__input" type="text" name="location" id="sample3">
    	 	<label class="mdl-textfield__label" for="sample1"></label>
	  	</div>
	  	<p><?php echo $errMsg; ?></p>	  	
  		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="form-submit">
	</form>
</div>


<div class="wrapper">
	<!-- Main Banner -->
	<section class="main-banner border">
		<img class="main-banner" src="images/main-banner-2.jpg" alt="<?php echo $imageAlt; ?>">
	</section>
</div>

<div class="line-divider mdl-shadow--2dp">
	<button id="down-btn" class="mdl-button mdl-js-button mdl-button--fab">
  		<i class="material-icons">keyboard_arrow_down</i>
	</button>
</div>

<div class="background">

	<div class="wrapper">

		<!-- Strap line -->
		<section class="tagline mdl-grid border">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet mdl-cell--middle" style="border:1px dotted blue;">
				<h5>Morbi facilisis iaculis accumsan.</h5>
				<p>Maintaining a healthy, road worthy bike is very important as every cyclist or bike owner should know. It makes your ride that even more enjoyable. Regular servicing and tune ups will keep you riding safely and maximise the life span of your bicycle. Avoiding regular maintenance could turn into expensive and inconvenient repairs.</p>
			</div>
			<div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet" style="border:1px dotted blue;">
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
					    	Providing you with information on bike shops that offer repairs and services that are within your budget and area.
					  	</span>
				  	</li>
					<li class="mdl-list__item">
						<span class="mdl-list__item-primary-content">
							<i class="bicycle-icon material-icons">directions_bike</i>
							Bikeshopcompare is 100% free.
						</span>
					</li>
				</ul>
			</div>
		</section>

		<!-- Copy container one -->
		<section id="scroll-dest" class="copy-container-1 mdl-grid border">
			<div class="container copy-1-container mdl-cell mdl-cell--12-col">
				<h1>WHAT IS BIKESHOPCOMPARE.COM?</h1>
				<p>Our bike Shop comparison website combines information on all cycle shops within the UK, allowing you to view and compare the best value for money bike shops within your area.</p>
				<p>Is your bike in need of a much needed service or repair?</p>
				<p>Are you looking at booking your bicycle in to a bike shop but have no idea which to choose?</p>
				<p>Whether you own a road bike, mountain bike, hybrid bike, electric bike, BMX, Tandem or any other kind of bike. There comes a point when components will start to break if they are not maintained properly or wear down though continued use.</p>
				<p>As we lead extremely busy lives it can be difficult to find the time to carryout repairs and maintenance, or we may just not have the knowledge to be able to.  Therefore when searching for a suitable bike shop that can accommodate our needs, in terms of budget and the type of services they offer, where they are located, it can be quite time consuming.</p>
			</div>
		</section>

		<!-- Copy container two -->
		<section class="copy-container-1 mdl-grid border">
			<div class="container mdl-cell mdl-cell--12-col">
				<h2>WHAT BIKE SHOP COMPARE DOES FOR YOU.</h2>
				<p>That’s where Bike Shop Compare comes in.  We aim to help you with your search and do all of the leg work for you. We provide information and details on bike shops listed across the country, allowing you to save valuable time and money.  Bike Shop Compare provides you with localised searches within your area.  Simply try the search located above.  We provide details on approximate costs of services, directions, opening times and contact information, allowing you to instantly narrow down your search for a suitable bike shop that can accommodate your criteria when deciding to choose one.</p>
			</div>
		</section>

		<!-- List/Image Divider Container -->
		<section class="copy-divider mdl-grid border">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet" style="border:1px dotted blue;">
				<ul class="demo-list-icon mdl-list">
					<li class="mdl-list__item">
				    	<span class="mdl-list__item-primary-content">
					    	<i class="bicycle-icon material-icons">directions_bike</i>
					    	Costings
						</span>
				  	</li>
				  	<li class="mdl-list__item">
					    <span class="mdl-list__item-primary-content">
						    <i class="bicycle-icon material-icons">directions_bike</i>
					    	Directions
					  	</span>
				  	</li>
					<li class="mdl-list__item">
						<span class="mdl-list__item-primary-content">
							<i class="bicycle-icon material-icons">directions_bike</i>
							Opening times
						</span>
					</li>
					<li class="mdl-list__item">
						<span class="mdl-list__item-primary-content">
							<i class="bicycle-icon material-icons">directions_bike</i>
							Contact Information
						</span>
					</li>
				</ul>
			</div>
			<div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet" style="border:1px dotted blue;">

			</div>
		</section>

		<!-- Copy Container three -->
		<section class="copy-container-3 mdl-grid border">
			<div class="container mdl-cell mdl-cell--12-col">
				<h2>WHY DOES BIKE SHOP COMPARE OFFER THESE SERVICES?</h2>
				<p>We have created a comparison site because we love cycling!  It is something that all of us at Bike Shop Compare are extremely passionate about.  We wanted this site to be a useful tool that would be of interest to everyone who owns a bicycle.</p>
				<p>One thing that we adhere to is that we will not charge you for the use of this website.   We do not collect fees and aim to be as fully transparent as possible. We want you to have the best possible experience and find the site as a useful tool.</p>			
			</div>
		</section>

	</div>

</div>






















<?php require_once("footer.php"); ?>