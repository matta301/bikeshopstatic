<?php 
	

 	$pageTitle = 'About |';
 	$pageClass = 'contact-page';
	
	

	require_once("header.php"); 

?>


<div class="background">

	<div class="wrapper">
		<section class="mdl-grid">
			<div class="container mdl-cell mdl-cell--12-col">
				<h1>Contact</h1>
				<p>We are here to answer your questions that you may have. Our contact form is the quickest way to get in touch if you do have any queries.</p>
				<p>We have tried to make things as easy and as user friendly as possible that’s why we welcome your feedback. We very much welcome your comments on areas that we could improve or any extra features that you would like to see.</p>
				<p>Alternatively if you are a bicycle repair shop and would like to get listed on bikeshopcompare.com we’d love to hear from you also.  Getting listed is totally free.  Get in touch and see how we can help boost your website.</p>
			</div>
		</section>

		<section class="mdl-grid">
			<div class="container quote mdl-cell mdl-cell--4-col">
				<blockquote>

					Nothing compares to the simple pleasure of riding a bike
					<cite>- John F Kennedy</cite>
				</blockquote>
			</div>
  			<div class="container comments middle mdl-cell mdl-cell--4-col">
				<h4>Questions or Comments?</h4>
				<p>contact@bikeshopcompare.com</p>
				<i>we’ll get back as soon as we can</i>	
  			</div>
			<div class="container signup mdl-cell mdl-cell--4-col mdl-cell--2-offset-tablet">
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; text-align: center; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
					<form action="//bikeshopcompare.us14.list-manage.com/subscribe/post?u=08402cc259c00e581ed09d13a&amp;id=c4f2a45dd2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<div class="mc-field-group">
								<label for="mce-EMAIL">Subsrcibe to Newsletter</label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_08402cc259c00e581ed09d13a_c4f2a45dd2" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"></div>
						</div>
					</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
			</div>
		</section>
	</div>

	<div class="wrapper">
		<section class="contact-form-outer mdl-grid  top-container">
			<div class="container contact-form mdl-cell mdl-cell--12-col ">				
				<form>
					<div class="mdl-grid">
						<div class="center-align mdl-cell mdl-cell--6-col">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="name">
								<label class="mdl-textfield__label" for="name">Name</label>
							</div>
						</div>
						<div class="center-align mdl-cell mdl-cell--6-col">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="name">
								<label class="mdl-textfield__label" for="name">Email</label>
							</div>
						</div>
					</div>

					<div class="mdl-grid">
						<div class="center-align mdl-cell mdl-cell--6-col">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="company">
								<label class="mdl-textfield__label" for="company">Company</label>
							</div>
						</div>
						<div class="center-align mdl-cell mdl-cell--6-col">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="phone">
								<label class="mdl-textfield__label" for="phone">Phone</label>
							</div>
						</div>
					</div>


					<div class="mdl-grid">
						<div class="center-align mdl-cell mdl-cell--6-col">
							<div class="mdl-textfield mdl-js-textfield">
								<textarea class="mdl-textfield__input" type="text" rows= "10" id="message" ></textarea>
								<label class="mdl-textfield__label" for="message">Your Message</label>
							</div>
						</div>
						<div class="mdl-cell mdl-cell--6-col">
							<input type="submit" name="contact-submit" class="contact-submit mdl-button mdl-js-button mdl-button--raised">
							<div class="follow-us center-align">
								<p>Follow us on</p>
								<hr>
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
						</div>
					</div>

				</form>
			</div>
		</section>
	</div>
</div>



















<?php require_once("footer.php"); ?>