<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package interlignes
 */

?>

<footer>
	<div class="childFooter">
		<div>
			<h3>Inter Lignes :</h3>
			<?php 
			wp_nav_menu(
				array(
					'menu'        => 'Mentions legales',
				)
			); ?>
		</div>
		<div class="reseau">
			<h3>Nos Réseaux Sociaux :</h3>
			<?php
			wp_nav_menu(
				array(
					'menu'        => 'Réseaux Sociaux',
				)
			);
			?>
		</div>
		<div class="contact">
			<h3>Nous Contacter :</h3>
			<?php
			wp_nav_menu(
				array(
					'menu'        => 'Contact',
				)
			); ?>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.slider').slick();
	});
</script>

</body>

</html>