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
	
	<script type="text/javascript">

		$(document).foundation();

		// Google autocomplete
		var input = document.getElementById('user-location');

		var options = {
		   types: ['(regions)'],
		   componentRestrictions: { country: 'gb' }
		};
		var autocomplete = new google.maps.places.Autocomplete(input,options);



		$('#down-btn').click(function (e) {
			console.log('clicked');

			$("body, html").animate({
			    scrollTop: $("#scroll-dest").position().top
			});
		});

	</script>
	</body>
</html>