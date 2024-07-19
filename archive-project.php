<?php get_header(); ?>

<section class="">
    <div class="container">

        <h1><?php _e('Projects', 'northern-mystery') ?></h1>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>');">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>