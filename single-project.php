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
$completed_works = get_field('completed_works');
$company = get_field('studio_or_company');
$link = get_field('link_to_project');
?>

<section class="project">
    <div class="container">

        <?php if ($name <> '') : ?>
            <h1 class="project__title"><?php echo $name; ?></h1>
        <?php endif; ?>

        <?php if ($type <> '') : ?>
            <p class="project__type"><?php echo $type; ?></p>
        <?php endif; ?>

        <?php if ($image <> '') : ?>
            <img class="project__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

        <?php if ($description <> '') : ?>
            <p class="project__description"><?php echo $description; ?></p>
        <?php endif; ?>

        <?php if ($completed_works <> '') : ?>
            <p class="project__works"><?php echo $completed_works; ?></p>
        <?php endif; ?>

        <div class="project__technologies">
            <span class="project__technologies-title">Technologies:</span>
            <?php if (have_rows('technologies')) : ?>
                <ul class="project__technologies-wrapper">
                    <?php while (have_rows('technologies')) : the_row(); ?>
                        <?php $technology = get_sub_field('technology'); ?>

                        <?php if ($technology <> '') : ?>
                            <li class="project__technology"><?php echo $technology; ?></li>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

        <?php if ($company <> '') : ?>
            <p class="project__company">Studio/Company: <?php echo $company; ?></p>
        <?php endif; ?>

        <?php if ($link <> '') : ?>
            <a class="project__link" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener noreferrer">Open the project</a>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>