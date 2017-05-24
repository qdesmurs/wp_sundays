<?php /*Template Name: Produit
Template Post Type: post, page
*/ ?>
<?php get_header() ?>

<main id="section">
    <h3><?php  the_title(); ?></h3>

        <article class="artprod">
            <img src="http://lorempixel.com/420/350/abstract" alt="img">
            <p><?php echo get_post_field('post_content');?></p>
            <h4><?php the_meta(); ?></h4>
            <button type="button" name="button">Ajouter au panier</button>

        </article>
</main>

<?php get_footer() ?>
