<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header(); ?>

<?php the_content(); ?>

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
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>

<?php
endforeach;
wp_reset_postdata();
?>



<?php get_footer(); ?>