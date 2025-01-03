<?php
if (!defined('ABSPATH')) exit; ?>

<?php
/*
Template Name: Project Page
Template Post Type: project
*/

get_header();

$name = get_field('name_of_project');
$type = get_field('type_of_project');
$image = get_field('image_of_project');
$description = get_field('description_of_project');
$responsibilities = get_field('responsibilities');
$company = get_field('studio_or_company');
$link = get_field('link_to_project');
?>

<main>
    <section class="project">
        <div class="container">

            <?php if ($name <> '') : ?>
                <h1 class="project__title"><?php echo $name; ?></h1>
            <?php endif; ?>

            <?php if ($type <> '') : ?>
                <p class="project__type"><?php echo $type; ?></p>
            <?php endif; ?>

            <div class="project__wrapper">
                <?php if ($image <> '') : ?>
                    <img class="project__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>

                <div class="project__text">
                    <?php if ($description <> '') : ?>
                        <div class="project__description"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($responsibilities <> '') : ?>
                        <div class="project__responsibilities">
                            <b class="project__responsibilities-title">Responsibilities:</b>
                            <div class="project__responsibilities-text"><?php echo $responsibilities; ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('technologies')) : ?>
                        <div class="project__technologies">
                            <b class="project__technologies-title">Technologies:</b>
                            <ul class="project__technologies-wrapper">
                                <?php while (have_rows('technologies')) : the_row(); ?>
                                    <?php $technology = get_sub_field('technology'); ?>
                                    <?php if ($technology <> '') : ?>
                                        <li class="project__technology"><?php echo $technology; ?></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ($company <> '') : ?>
                        <p class="project__company"><b>Studio/Company:</b> <?php echo $company; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($link <> '') : ?>
                <a class="btn btn--primary" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener noreferrer">Go to the project</a>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>