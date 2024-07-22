<?php
/*
Template Name: Home Page
Template Post Type: page
*/

get_header(); ?>

<?php

get_template_part('template-parts/home-page', 'hero');

get_template_part('template-parts/home-page', 'selected-skills');

get_template_part('template-parts/home-page', 'recent-projects');

?>

<?php get_footer(); ?>