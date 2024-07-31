<section class="selected-skills">
    <div class="container">

        <h2 class="selected-skills__title">My skills</h2>

        <?php
        $skills = get_field('skills');

        if (have_rows('skills')) : ?>
            <div class="skills-wrapper">
                <?php while (have_rows('skills')) : the_row(); ?>

                    <?php if (have_rows('skill')) : ?>
                        <div class="skill-item">
                            <?php while (have_rows('skill')) : the_row();
                                $name = get_sub_field('name_of_skill');
                                $image = get_sub_field('image_of_skill');
                            ?>

                                <?php if ($name <> '') : ?>
                                    <h3 class="skill-item__title"><?php echo $name; ?></h3>
                                <?php endif; ?>

                                <?php if ($image <> '') : ?>
                                    <img class="skill-item__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <a class="btn-secondary" href="<?php echo home_url() . '/about'; ?>">More skills</a>

    </div>
</section>