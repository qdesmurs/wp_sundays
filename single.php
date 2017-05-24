<?php/*Template Name: Produit
Template Post Type: post, page
*/?>
<?php get_header() ?>

<main id="section">
    <h3 class="text-center">Spring Summer 2017</h3>
    <h3><?php  the_title(); ?></h3>

        <article>
            <img src="http://lorempixel.com/200/150/abstract" alt="img">
            <p><?php echo get_post_field('post_content');?></p>
            <h4><?php the_meta() ?></h4>
            <button type="button" name="button">Ajouter au panier</button>

        </article>
</main>

<?php get_footer() ?>
