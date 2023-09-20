<?php /* 
Template Name: Jeux Educatifs
*/
?>
<?php
get_header();
?>
<?php $page = get_query_var('paged');  ?>
<h1 class="titleCategories">Jeux Educatifs</h1>
<?php
$args = array(
    'post_type' => 'post', // De type article
    'orderby' => 'date', // Par date 
    'order'   => 'DESC', // Du plus récent au plus ancien
    'category_name'  => 'jeux-educatifs, 0-3ans, 3ans, 7ans, 12ans', // Slug de la catégorie 
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $page
);

$query = new WP_Query($args);
?>

<section class="allList">
    <?php
    foreach ($query->posts as $post) { ?>
        <div class="bloc">
            <p><?= $post->post_content; ?></p>
            <?= get_the_post_thumbnail($post); ?>
            <div class="blocText">
                <p class="titleName">Titre : <?= $post->post_title; ?></p>
                <p>Editeur : <?= get_field("editorGame", $post->ID); ?></p>
                <p>Prix : <?= get_field("pricegame", $post->ID); ?>€</p>
                <p>Catégories : <?= get_the_category($post->ID)[0]->name; ?></p>
            </div>
        </div>
    <?php }
    ?>

    <div class="paginate">
        
       <?= paginate_links(
            array(
                'total' => $query->max_num_pages,
                'prev_text' => '<span>Précedent</span>',
                'next_text' => '<span>Suivant</span>'
            )
        ); ?>
    </div>
</section>
<?php get_footer(); ?>