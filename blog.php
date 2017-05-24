<?php /* Template name: blog */ ?>
<?php get_header() ?>
<main>
    <h3 class="text-center">Blog Spring Summer 2017</h3>
    <section>
    <?php


        $args = array('category' => '9',
                      'orderby'  => 'date',
                      'order'    => 'ASC',
                      'posts_per_page' => 12,);
        $posts = get_posts($args);

        foreach ($posts as $post) {
            setup_postdata($post);
            $cats = get_the_category();
            ?>
            <article class='art'>
            <img src='http://lorempixel.com/150/100' alt='img' class="imgblog">
            <h4><?php echo $cats[0]->name; ?></h4>
            <h4><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
            <p class="lep"><?php echo get_post_field('post_content');?></p>
            <h5 class="blog"><?php the_meta() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
</main>
<?php get_footer() ?>
