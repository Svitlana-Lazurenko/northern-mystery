<?php
if (!defined('ABSPATH')) exit; ?>

<?php
/*
Template Name: About Page
Template Post Type: page
*/

get_header(); ?>


<main>
    <?php

    get_template_part('template-parts/about-page', 'main-info');

    get_template_part('template-parts/about-page', 'experience');

    get_template_part('template-parts/about-page', 'documents');

    ?>
</main>




<?php get_footer(); ?>