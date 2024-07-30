<section id="home-hero" class="hero">
    <div class="container">

        <?php
        $name = get_field('name-welcome');
        $specialty = get_field('specialty');
        $greeting = get_field('greeting');
        $photo = get_field('photo-welcome');
        ?>

        <?php if ($name <> '') : ?>
            <div><?php echo $name; ?></div>
        <?php endif; ?>

        <?php if ($specialty <> '') : ?>
            <div><?php echo $specialty; ?></div>
        <?php endif; ?>

        <?php if ($greeting <> '') : ?>
            <div><?php echo $greeting; ?></div>
        <?php endif; ?>

        <a href="" download="">Download CV</a>


        <div class="" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/svg/tree.svg'; ?>)">
            <div class="" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/svg/circle-text.svg'; ?>)">
                <?php if ($photo <> '') : ?>
                    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>