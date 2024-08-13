<?php get_header(); ?>

<main>
    <section class="projects">
        <div class="container">
            <h1 class="projects__title">My Works</h1>

            <?php if (have_posts()) : ?>
                <ul class="projects__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="project-card">
                            <a class="project-card__link" href="<?php the_permalink(); ?>">
                                <div class="project-card__background" style="background-image: url('<?php the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>');"></div>
                                <div class="project-card__overlay">
                                    <div class="project-card__description"><?php the_excerpt(); ?></div>
                                </div>
                            </a>


                            <h2 class="project-card__title">
                                <a class="project-card__title-link" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>


                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No works found</p>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>