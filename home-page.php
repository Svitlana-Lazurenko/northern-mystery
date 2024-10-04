<?php
if (!defined('ABSPATH')) exit; ?>

<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header(); ?>

<main>

    <div class="home-background" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/lake-louise.webp'; ?>);"></div>


    <?php

    get_template_part('template-parts/home-page', 'hero');

    get_template_part('template-parts/home-page', 'selected-skills');

    get_template_part('template-parts/home-page', 'recent-projects');

    ?>
</main>

<?php get_footer(); ?>