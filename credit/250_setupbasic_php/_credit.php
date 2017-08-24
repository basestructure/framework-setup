//* Add the credits section on the site footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'swp_sitefooter_credit' );
function swp_sitefooter_credit() {
	?>
	<div class="siteby"><a href="https://smarterwebpackages.com/">SmarterWebPackages.com</a></div>
	<div class="copyright">Copyright © <?php echo date("Y"); ?> Smarter Better · All Rights Reserved<br>
	Site Design by <a href="https://smarterwebpackages.com/">SmarterWebPackages.com</a></div>
	<?php
}