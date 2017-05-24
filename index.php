<?php /* Template name: CV2 */ ?>
<?php get_header() ?>
<main>
    <?php if (get_the_ID()== 22): ?>
    <h3 class="text-center">Spring Summer 2017</h3>
    <section>
    <?php


        $args = array('category' => '6, 7, 8',
                      'orderby'  => 'date',
                      'order'    => 'ASC',
                      'posts_per_page' => 12,);
        $posts = get_posts($args);

        foreach ($posts as $post) {
            setup_postdata($post);
            $cats = get_the_category();
            ?>
            <article class='<?php echo $cats[0]->slug; ?>'>
            <img src='http://lorempixel.com/150/200' alt='img'>
            <h4><?php echo $cats[0]->name; ?></h4>
            <h4><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
            <h5 class="price"><?php the_meta() ?></h5>
            </article>
            <?php
        }

    ?>
    </section>
        <?php elseif (get_the_ID()== 41): ?>
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
                    <article class='<?php echo $cats[0]->slug; ?>'>
                    <img src='http://lorempixel.com/150/200' alt='img'>
                    <h4><?php echo $cats[0]->name; ?></h4>
                    <h4><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
                    <h5 class="price"><?php the_meta() ?></h5>
                    </article>
                    <?php
                }
                ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>
