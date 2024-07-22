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

        <?php if ($photo <> '') : ?>
            <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
        <?php endif; ?>

    </div>
</section>