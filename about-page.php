<?php
/*
Template Name: About Page
Template Post Type: page
*/

get_header(); ?>

<section id="home-hero" class="hero">
    <div class="container">

        <div>
            <?php
            $name = get_field('name');
            $description = get_field('description');
            $photo = get_field('photo');
            ?>

            <?php if ($name <> '') : ?>
                <div><?php echo $name; ?></div>
            <?php endif; ?>

            <?php if ($description <> '') : ?>
                <div><?php echo $description; ?></div>
            <?php endif; ?>

            <?php if ($photo <> '') : ?>
                <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
            <?php endif; ?>
        </div>

        <div>
            <?php if (have_rows('skills')) : ?>
                <div class="">
                    <?php while (have_rows('skills')) : the_row(); ?>
                        <?php $skill = get_sub_field('skill'); ?>
                        <?php if ($skill <> '') : ?>
                            <span><?php echo $skill; ?></span>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('languages')) : ?>
                <div class="">
                    <?php while (have_rows('languages')) : the_row(); ?>
                        <?php if (have_rows('language')) : ?>
                            <div class="">
                                <?php while (have_rows('language')) : the_row();
                                    $name = get_sub_field('name_of_language');
                                    $level = get_sub_field('level_of_language'); ?>
                                    <?php if ($name <> '') : ?>
                                        <span><?php echo $name; ?></span>
                                    <?php endif; ?>
                                    <?php if ($level <> '') : ?>
                                        <span><?php echo $level; ?></span>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('i_have_practice_in')) : ?>
                <div class="">
                    <?php while (have_rows('i_have_practice_in')) : the_row(); ?>
                        <?php $skill_description = get_sub_field('skill_description'); ?>
                        <?php if ($skill_description <> '') : ?>
                            <span><?php echo $skill_description; ?></span>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div>
            <?php if (have_rows('work_experience')) : ?>
                <div class="">
                    <?php while (have_rows('work_experience')) : the_row(); ?>
                        <?php
                        $position = get_sub_field('position');
                        $place_of_work = get_sub_field('place_of_work');
                        $start_and_end_of_work = get_sub_field('start_&_end_of_work');
                        ?>

                        <?php if ($position <> '') : ?>
                            <span><?php echo $position; ?></span>
                        <?php endif; ?>

                        <?php if ($place_of_work <> '') : ?>
                            <span><?php echo $place_of_work; ?></span>
                        <?php endif; ?>

                        <?php if ($start_and_end_of_work <> '') : ?>
                            <span><?php echo $start_and_end_of_work; ?></span>
                        <?php endif; ?>

                        <?php if (have_rows('responsibilities_&_achievements')) : ?>
                            <div class="">
                                <?php while (have_rows('responsibilities_&_achievements')) : the_row(); ?>
                                    <?php $resp_or_ach = get_sub_field('responsibility_or_achievement'); ?>
                                    <?php if ($resp_or_ach <> '') : ?>
                                        <span><?php echo $resp_or_ach; ?></span>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (have_rows('education')) : ?>
                <div class="">
                    <?php while (have_rows('education')) : the_row(); ?>
                        <?php
                        $specialty_education = get_sub_field('specialty-education');
                        $educational_institution = get_sub_field('educational_institution');
                        $start_and_end_of_education = get_sub_field('start_&_end_of_education');
                        $achievments = get_sub_field('achievments');
                        ?>

                        <?php if ($specialty_education <> '') : ?>
                            <span><?php echo $specialty_education; ?></span>
                        <?php endif; ?>

                        <?php if ($educational_institution <> '') : ?>
                            <span><?php echo $educational_institution; ?></span>
                        <?php endif; ?>

                        <?php if ($start_and_end_of_education <> '') : ?>
                            <span><?php echo $start_and_end_of_education; ?></span>
                        <?php endif; ?>

                        <?php if ($achievments <> '') : ?>
                            <span><?php echo $achievments; ?></span>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>