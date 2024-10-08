<?php
if (!defined('ABSPATH')) exit; ?>

<section class="hero">
    <div class="container container--no-gap container--flex">

        <?php
        $name = get_field('name-welcome');
        $specialty = get_field('specialty-welcome');
        $info = get_field('info-welcome');
        $photo = get_field('photo-welcome');
        $resume = get_field('resume', 'option');
        ?>

        <div class="hero-info">
            <?php if ($name <> '') : ?>
                <h1 class="hero-info__greeting"><span class="hero-info__greeting--hello">Hello! I am </span><br /><span class="hero-info__greeting--name"><?php echo $name; ?></span></h1>
            <?php endif; ?>

            <?php if ($specialty <> '') : ?>
                <h2 class="hero-info__specialty"><?php echo $specialty; ?></h2>
            <?php endif; ?>

            <?php if ($info <> '') : ?>
                <p class="hero-info__info"><?php echo $info; ?></p>
            <?php endif; ?>

            <?php if ($resume <> '') : ?>
                <a class="btn btn--primary" download href="<?php echo $resume['url']; ?>">Download CV</a>
            <?php endif; ?>
        </div>

        <div class="hero-img">
            <img class="hero-img__lettering" src="<?php echo get_template_directory_uri() . '/assets/svg/circle-text.svg'; ?>);" alt="" aria-hidden="true" />
            <img class="hero-img__tree" src="<?php echo get_template_directory_uri() . '/assets/svg/tree.svg'; ?>)" alt="" aria-hidden="true" />
            <?php if ($photo <> '') : ?>
                <img class="hero-img__photo" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
            <?php endif; ?>
        </div>


    </div>
</section>