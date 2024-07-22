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
$studio_or_company = get_field('studio_or_company');
$link = get_field('link_to_project');
?>

<section id="project" class="project">
    <div class="container">

        <?php if ($name <> '') : ?>
            <div><?php echo $name; ?></div>
        <?php endif; ?>

        <?php if ($type <> '') : ?>
            <div><?php echo $type; ?></div>
        <?php endif; ?>

        <?php if ($image <> '') : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

        <?php if ($description <> '') : ?>
            <div><?php echo $description; ?></div>
        <?php endif; ?>

        <?php if ($completed_works <> '') : ?>
            <div><?php echo $completed_works; ?></div>
        <?php endif; ?>

        <?php if (have_rows('technologies')) : ?>
            <div class="technologies-wrapper">
                <?php while (have_rows('technologies')) : the_row(); ?>
                    <?php $technology = get_sub_field('technology'); ?>

                    <?php if ($technology <> '') : ?>
                        <span><?php echo $name; ?></span>
                    <?php endif; ?>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ($studio_or_company <> '') : ?>
            <div><?php echo $studio_or_company; ?></div>
        <?php endif; ?>

        <?php if ($link <> '') : ?>
            <a class="" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>