<?php get_header(); ?>

<main>
    <section class="projects">
        <div class="container">
            <h1 class="projects__title">My Works</h1>

            <?php if (have_posts()) : ?>
                <ul class="projects__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $thumbnailId = get_post_meta(get_the_ID(), '_thumbnail_id', true);
                        $thumbnailAlt = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true);
                        $thumbnailUrl = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>

                        <li class="project-card">
                            <a class="project-card__link" href="<?php the_permalink(); ?>">
                                <div class="project-card__img-wrapper">
                                    <img class="project-card__img" alt="<?php echo $thumbnailAlt; ?>" src="<?php echo $thumbnailUrl; ?>" />
                                    <div class="project-card__overlay">
                                        <div class="project-card__description"><?php the_excerpt(); ?></div>
                                    </div>
                                </div>
                                <h2 class="project-card__title"><?php the_title(); ?></h2>
                            </a>
                        </li>

                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p class="not-found">No added works yet</p>
            <?php endif; ?>

        </div>



    </section>
</main>

<?php get_footer(); ?>