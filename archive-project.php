<?php get_header(); ?>

<section class="projects">
    <div class="container">
        <h1 class="projects__title">My Works</h1>

        <ul class="projects__list">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="project-card" style="background-image: url('<?php the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>');">
                        <a class="project-card__link" href="<?php the_permalink(); ?>">
                            <h2 class="project-card__title"><?php the_title(); ?></h2>
                            <p class="project-card__description"><?php the_excerpt(); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>

        </ul>

    </div>
</section>

<?php get_footer(); ?>