<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yandy-master
 */

?>


<footer class="footer1">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6 contact-text">
					<div class="top-h1">We can’t wait to hear from you!</div>
					<div class="footer-p1">We love hearing from you! If you have any questions, hit us up.</div>
					<div class="footer-p1">1495 G ST, San DIEGO, CA 92101<br> (619) 955-8755<br> CHEERS@YOUANDYOURS.COM
					</div>
				</div>
				<div class="col-12 col-xl-6">
					<form action="" method="post" class="home-form" name="contactForm" id="contactForm">
						<div class="form-style">
							<div>
								<input type="text" name="name" placeholder="Full Name" required>
							</div>
							<div>
								<input type="email" name="email" placeholder="Email" required>
							</div>
							<div>
								<input type="text" name="title" placeholder="What This About" required>
							</div>
							<div>
								<input type="tel" name="phone" placeholder="Phone Number (Optional)">
							</div>
							<div>
								<textarea name="message"  placeholder="Message or Questions" required></textarea>
							</div>
						</div>
						<button type="submit" class="book-event-submit" id="bookEvent">
							<span class="home-footer-btn">
								<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<?php wp_footer(); ?>
</body>

</html>
