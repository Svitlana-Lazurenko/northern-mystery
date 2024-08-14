<section class="recent-projects">
    <div class="container">

        <h2 class="recent-projects__title">My recent works</h2>

        <?php $post_projects = get_posts(array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'id',
            'order' => 'DESC'
        ));

        if (!empty($post_projects)) { ?>
            <div class="recent-projects__wrapper">
                <?php foreach ($post_projects as $post) :
                    setup_postdata($post);
                ?>
                    <div class="recent-project">
                        <div class="recent-project__text-wrapper">
                            <h3 class="recent-project__title">
                                <a class="recent-project__title-link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="recent-project__description"><?php the_excerpt(); ?></div>
                        </div>
                        <a class="recent-project__img-link" href="<?php the_permalink(); ?>">
                            <?php
                            $imgUrl = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $imgAlt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                            ?>
                            <img class="recent-project__img" src="<?php echo $imgUrl ?>" alt="<?php echo $imgAlt; ?>" />
                        </a>
                    </div>

                <?php
                endforeach;
                wp_reset_postdata(); ?>

            </div>
            <a class="btn btn--secondary" href="<?php echo home_url() . '/works'; ?>">More works</a>

        <?php } else { ?>
            <p class="recent-projects__no-found">No works found</p>'
        <?php } ?>

    </div>
</section>