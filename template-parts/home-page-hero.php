<section class="hero">
    <div class="container">

        <?php
        $name = get_field('name-welcome');
        $specialty = get_field('specialty');
        $greeting = get_field('greeting');
        $photo = get_field('photo-welcome');
        $resume = get_field('resume', 'option');
        ?>

        <?php if ($name <> '') : ?>
            <h1 class="hero-name">Hello! I am <?php echo $name; ?></h1>
        <?php endif; ?>

        <?php if ($specialty <> '') : ?>
            <h2 class="hero-specialty"><?php echo $specialty; ?></h2>
        <?php endif; ?>

        <?php if ($greeting <> '') : ?>
            <p class="greeting"><?php echo $greeting; ?></p>
        <?php endif; ?>

        <?php if ($resume <> '') : ?>
            <a class="btn-primary" download href="<?php echo $resume['url']; ?>">Download CV</a>
        <?php endif; ?>

        <div class="hero-img">
            <div class="hero-img__tree" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/svg/tree.svg'; ?>);">
                <div class="hero-img__lettering" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/svg/circle-text.svg'; ?>)">
                    <?php if ($photo <> '') : ?>
                        <img class="hero-img__photo" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>