<section class="selected-skills">
    <div class="container">

        <h2 class="selected-skills__title">My skills</h2>

        <?php $skills = get_field('skills'); ?>
        <?php if (have_rows('skills')) : ?>
            <ul class="selected-skills__list">
                <?php while (have_rows('skills')) : the_row();
                    $name = get_sub_field('name_of_skill');
                    $image = get_sub_field('image_of_skill');
                ?>
                    <li class="selected-skills__item">
                        <?php if ($name <> '') : ?>
                            <h3 class="selected-skills__title"><?php echo $name; ?></h3>
                        <?php endif; ?>

                        <?php if ($image <> '') : ?>
                            <img class="selected-skills__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <a class="btn-secondary" href="<?php echo home_url() . '/about'; ?>">More skills</a>

    </div>
</section>