<?php
/*
Template Name: Musique et video
*/
?>

<?php get_header(); ?>
<?php $page = get_query_var('paged');  ?>
<h1 class="titleCategories">Musique et Vidéo</h1>
<?php


// C'est une variable qui sera utilisé plus tard dans le wp_query qui permet de récupérer...
$args = array(
    'post_type' => 'post', // De type article
    'orderby' => 'date', // Par date 
    'order'   => 'DESC', // Du plus récent au plus ancien
    'category_name' => 'documentaire, audio, film , jeunesse',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $page
);



$query = new WP_Query($args);

?>
<div id="content">
</div>

<pre>
    <section class="allList">
<?php
foreach ($query->posts as $post) { ?>
      <div class="bloc">
          <p><?= $post->post_content; ?></p>
          <?= get_the_post_thumbnail($post); ?>
          <div class="blocText">
          <p class="titleName">Titre : <?= $post->post_title; ?></p>
      <p>Auteur : <?= get_field("auteur", $post->ID); ?></p>
      <p>Prix : <?= get_field("price", $post->ID); ?>€</p>       
      <p>Date : <?= get_field("date", $post->ID); ?></p>
      <p>Catégories : <?= get_the_category($post->ID)[0]->name; ?></p>
      </div>
      </div>
  <?php }
    ?>
   </section>
   </pre>
<div class="paginate">
    <?= paginate_links(
        array(
            'total' => $query->max_num_pages,
            'prev_text' => '<span>Précedent</span>',
            'next_text' => '<span>Suivant</span>'
        )
    );
    ?>
</div>
<?php 

get_footer(); ?>