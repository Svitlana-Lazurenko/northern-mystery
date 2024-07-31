<section class="recent-projects">
    <div class="container">

        <h2 class="recent-projects__title">My recent works</h2>

        <?php $post_projects = get_posts(array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'id',
            'order' => 'DESC'
        ));

        foreach ($post_projects as $post) :
            setup_postdata($post);
        ?>

            <div class="recent-project">
                <a class="recent-project__title-link" href="<?php the_permalink(); ?>">
                    <h3 class="recent-project__title"><?php the_title(); ?></h3>
                </a>
                <p class="recent-project__description"><?php the_excerpt(); ?></p>
                <a class="recent-project__img-link" href="<?php the_permalink(); ?>">
                    <?php
                    $imgSrc = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $imgAlt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                    ?>
                    <img class="recent-project__img" src="<?php echo $imgSrc ?>" alt="<?php echo $imgAlt; ?>" />
                </a>
            </div>

        <?php
        endforeach;
        wp_reset_postdata();
        ?>

        <a class="btn-secondary" href="<?php echo home_url() . '/works'; ?>">More works</a>

    </div>
</section>