<section class="main-info">
    <div class="container">

        <div class="brief-info">
            <?php
            $name = get_field('name');
            $description = get_field('description');
            $photo = get_field('photo');
            $resume = get_field('resume', 'option');
            ?>

            <?php if ($photo <> '') : ?>
                <img class="brief-info__img" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
            <?php endif; ?>

            <?php if ($name <> '') : ?>
                <h1 class="brief-info__name">I am <?php echo $name; ?></h1>
            <?php endif; ?>

            <?php if ($description <> '') : ?>
                <p class="brief-info__description"><?php echo $description; ?></p>
            <?php endif; ?>

            <?php if ($resume <> '') : ?>
                <a class="btn-primary" download href="<?php echo $resume['url']; ?>">Download CV</a>
            <?php endif; ?>
        </div>

        <div class="skills">

            <?php if (have_rows('skills')) : ?>
                <div class="mini-skills">
                    <h2 class="mini-skills__title">My skills</h2>
                    <ul class="mini-skills_list">
                        <?php while (have_rows('skills')) : the_row(); ?>
                            <?php $skill = get_sub_field('skill'); ?>
                            <?php if ($skill <> '') : ?>
                                <li class="mini-skills_skill"><?php echo $skill; ?></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (have_rows('languages')) : ?>
                <div class="languages">
                    <h2 class="languages__title">Languages</h2>
                    <ul class="languages__list">
                        <?php while (have_rows('languages')) : the_row();
                            $name = get_sub_field('name_of_language');
                            $level = get_sub_field('level_of_language'); ?>
                            <li class="languages__language">
                                <?php if ($name <> '') : ?>
                                    <span class="languages__name"><?php echo $name; ?></span>
                                <?php endif; ?>
                                <?php if ($level <> '') : ?>
                                    <span class="languages__level"> - <?php echo $level; ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (have_rows('i_have_practice_in')) : ?>
                <div class="practice">
                    <h2 class="practice__title">I have practice in:</h2>
                    <ul class="practice__list">
                        <?php while (have_rows('i_have_practice_in')) : the_row(); ?>
                            <?php $skill_description = get_sub_field('skill_description'); ?>
                            <?php if ($skill_description <> '') : ?>
                                <li><?php echo $skill_description; ?></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>


        </div>

    </div>
</section>