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
            <?php
            $imgSrc = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $imgAlt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            ?>
            <img src="<?php echo $imgSrc ?>" alt="<?php echo $imgAlt; ?>" />
        </a>
    </div>

<?php
endforeach;
wp_reset_postdata();
?>