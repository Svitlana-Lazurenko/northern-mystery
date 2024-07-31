<?php
/*
Template Name: About Page
Template Post Type: page
*/

get_header(); ?>



<?php

get_template_part('template-parts/about-page', 'main-info');

get_template_part('template-parts/about-page', 'experience');

get_template_part('template-parts/about-page', 'sertificates');

?>





<?php get_footer(); ?>