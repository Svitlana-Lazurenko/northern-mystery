<?php
if (!defined('ABSPATH')) exit; ?>

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
                    <li class="selected-skill">
                        <?php if ($image <> '') : ?>
                            <img class="selected-skill__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>

                        <?php if ($name <> '') : ?>
                            <h3 class="selected-skill__title"><?php echo $name; ?></h3>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <a class="btn btn--primary" href="<?php echo home_url() . '/about#skills'; ?>">More skills</a>

    </div>
</section>