<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package interlignes
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="texte">

		<h1><?= get_field("titreprincipal") ?></h1>
		<div class="image">
			<div id="slider">
				<img id="showing" class="imgslider" src="<?= get_field("imgfacade")["url"] ?>" alt="">
				<img class="imgslider" src="<?= get_field("imglivre")["url"] ?>" alt="">
				<img class="imgslider" src="<?= get_field("imgmusicvideo")["url"] ?>" alt="">
				<img class="imgslider" src="<?= get_field("imgjeunesse")["url"] ?>" alt="">
				<div id="precedent" onclick="changeSlide(-1)">&lt;</div>
				<div id="suivant" onclick="changeSlide(1)">&gt;</div>
			</div>
			<div class="horaire">
				<div class="info">
					<h2>Nos horaires :</h2>
				</div>
				<div class="jour">
					<p><?= get_field("day") ?></p>
				</div>
				<div class="heure">
					<p><?= get_field("hour") ?></p>
				</div>
			</div>
		</div>


		<div class="biographie">
			<div class="intro">
				<h2>Présentation</h2>
			</div>
			<div class="histoire">
				<p><?= get_field("presentation") ?></p>
			</div>
		</div>
	</div>


	
	<div class="titleBloc">
		<h2 class="titleBook">Nos meilleurs sélections :</h2>
</div>
	<section class="bookList">
		<?php
		$args = array(
			'post_type' => 'post', // De type article
			'orderby' => 'date', // Par date 
			'order'   => 'DESC', // Du plus récent au plus ancien
			'category_name'  => 'livres', // Slug de la catégorie 
			'posts_per_page' => 6,
		);

		$query = new WP_Query($args);
		// var_dump($query->posts);
		?>
    
		
			<?php
			foreach ($query->posts as $post) { ?>
				<div class="blocBook">
					<p><?= $post->post_content; ?></p>	
					<?= get_the_post_thumbnail($post); ?>
					<div class="blocText">
						<p class="title-book-accueil"><?= $post->post_title; ?></p>
						<div class="priceBloc">
						<p class="price-accueil">Prix : <?= get_field("pricebook", $post->ID); ?>€</p>
						</div>
					</div>
				</div>
			<?php }
			?>
	<div>
		<h2 class="titleBook">Acualités :</h2>
	</div>
	</section>
	<section class="bookList">
<?php
$args = array(
			'post_type' => 'post', // De type article
			'orderby' => 'date', // Par date 
			'order'   => 'DESC', // Du plus récent au plus ancien
			'category_name'  => 'livresactu', // Slug de la catégorie 
			'posts_per_page' => 6,
		);

		$query = new WP_Query($args);
		// var_dump($query->posts);
		?>
    
	
			<?php
			foreach ($query->posts as $post) { ?>
				<div class="blocBook">
					<p><?= $post->post_content; ?></p>
					<?= get_the_post_thumbnail($post); ?>
					<div class="blocText">
					    <p class="title-book-accueil"><?= $post->post_title; ?></p>
						<div class="priceBloc">
							<p class="price-accueil">Prix : <?= get_field("pricebook", $post->ID); ?>€</p>
						</div>
					</div>
				</div>
			<?php }
			?>
	</section>
    

</main><!-- #main -->

<script>


</script>
<?php
get_footer();
?>