<section class="hero">
    <div class="container container--no-gap">

        <?php
        $name = get_field('name-welcome');
        $specialty = get_field('specialty');
        $greeting = get_field('greeting');
        $photo = get_field('photo-welcome');
        $resume = get_field('resume', 'option');
        ?>
        <div class="hero__content">
            <div class="hero-info">
                <?php if ($name <> '') : ?>
                    <h1 class="hero-info__greeting"><span class="hero-info__greeting--hello">Hello! I am </span><br /><span class="hero-info__greeting--name"><?php echo $name; ?></span></h1>
                <?php endif; ?>

                <?php if ($specialty <> '') : ?>
                    <h2 class="hero-info__specialty"><?php echo $specialty; ?></h2>
                <?php endif; ?>

                <?php if ($greeting <> '') : ?>
                    <p class="hero-info__text"><?php echo $greeting; ?></p>
                <?php endif; ?>

                <?php if ($resume <> '') : ?>
                    <a class="btn btn--primary" download href="<?php echo $resume['url']; ?>">Download CV</a>
                <?php endif; ?>
            </div>

            <div class="hero-img">
                <img class="hero-img__lettering" src="<?php echo get_template_directory_uri() . '/assets/svg/circle-text.svg'; ?>);" alt="" />
                <img class="hero-img__tree" src="<?php echo get_template_directory_uri() . '/assets/svg/tree.svg'; ?>)" alt="" />
                <?php if ($photo <> '') : ?>
                    <img class="hero-img__photo" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div>

            </div>
</section>