<?php $post_projects = get_posts(array(
    'post_type' => 'project',
    'posts_per_page' => 3,
    'orderby' => 'id',
    'order' => 'DESC'
));

foreach ($post_projects as $post) :
    setup_postdata($post);
?>

    <div class="">
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>" alt="" />
        </a>
    </div>

<?php
endforeach;
wp_reset_postdata();
?>