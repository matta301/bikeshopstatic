    

				<!-- <footer class="mdl-mega-footer">
					<div class="mdl-mega-footer__middle-section">
				
						<div class="mdl-mega-footer__drop-down-section">
							<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
							<h1 class="mdl-mega-footer__heading">Features</h1>
							<ul class="mdl-mega-footer__link-list">
								<li><a href="#">About</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Partners</a></li>
								<li><a href="#">Updates</a></li>
							</ul>
						</div>
				
						<div class="mdl-mega-footer__drop-down-section">
							<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
							<h1 class="mdl-mega-footer__heading">Details</h1>
							<ul class="mdl-mega-footer__link-list">
								<li><a href="#">Specs</a></li>
								<li><a href="#">Tools</a></li>
								<li><a href="#">Resources</a></li>
							</ul>
						</div>
				
						<div class="mdl-mega-footer__drop-down-section">
							<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
							<h1 class="mdl-mega-footer__heading">Technology</h1>
							<ul class="mdl-mega-footer__link-list">
								<li><a href="#">How it works</a></li>
								<li><a href="#">Patterns</a></li>
								<li><a href="#">Usage</a></li>
								<li><a href="#">Products</a></li>
								<li><a href="#">Contracts</a></li>
							</ul>
						</div>
				
						<div class="mdl-mega-footer__drop-down-section">
							<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
							<h1 class="mdl-mega-footer__heading">FAQ</h1>
							<ul class="mdl-mega-footer__link-list">
								<li><a href="#">Questions</a></li>
								<li><a href="#">Answers</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
				
					</div>
				
					<div class="mdl-mega-footer__bottom-section">
					<div class="mdl-logo">Title</div>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">Help</a></li>
					<li><a href="#">Privacy &amps; Terms</a></li>
					</ul>
					</div>
				
				</footer> -->


			</div>
  		</main>
	</div>



	

	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmIa_gm6Kr_5wCd_dnBDwvPtnNdHPHDtE&libraries=places"></script>
	<script type="text/javascript">		

		// Google autocomplete
		var input = document.getElementById('user-location');

		var options = {
		   types: ['(regions)'],
		   componentRestrictions: { country: 'gb' }
		};
		var autocomplete = new google.maps.places.Autocomplete(input,options);

	</script>
	</body>
</html>