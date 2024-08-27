<section class="experience">
    <div class="container">

        <!--------------------- Work experience ---------------------------->
        <?php if (have_rows('work_experience')) : ?>
            <div class="work-experience">
                <h2 class="work-experience__title">Work experience</h2>
                <ul class="work-experience__list">
                    <?php while (have_rows('work_experience')) : the_row(); ?>
                        <?php
                        $position = get_sub_field('position');
                        $place_of_work = get_sub_field('place_of_work');
                        $about_place_of_work = get_sub_field('about_place_of_work');
                        $start_and_end_of_work = get_sub_field('start_&_end_of_work');
                        ?>
                        <li class="work-experience-card">
                            <?php if ($position <> '') : ?>
                                <h3 class="work-experience-card__title"><?php echo $position; ?></h3>
                            <?php endif; ?>

                            <?php if ($place_of_work <> '') : ?>
                                <span class="work-experience-card__place-of-work"><?php echo $place_of_work; ?></span>
                            <?php endif; ?>

                            <?php if ($start_and_end_of_work <> '') : ?>
                                <span class="work-experience-card__time"><?php echo $start_and_end_of_work; ?></span>
                            <?php endif; ?>

                            <?php if ($about_place_of_work <> '') : ?>
                                <div class="work-experience-card__about-place-of-work"><?php echo $about_place_of_work; ?></div>
                            <?php endif; ?>


                            <?php if (have_rows('responsibilities_&_achievements')) : ?>
                                <div class="work-experience-card-ach">
                                    <h4 class="work-experience-card-ach__title">Responsibilities and achievements:</h4>
                                    <ul class="work-experience-card-ach__list">
                                        <?php while (have_rows('responsibilities_&_achievements')) : the_row(); ?>
                                            <?php $resp_or_ach = get_sub_field('responsibility_or_achievement'); ?>
                                            <?php if ($resp_or_ach <> '') : ?>
                                                <li class="work-experience-card-ach__item"><?php echo $resp_or_ach; ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        </li>
                </ul>
            </div>
        <?php endif; ?>

        <!--------------------- End of work experience ---------------------------->

        <!--------------------- Education with switch ---------------------------->

        <?php
        function show_education_block()
        {
            $show = get_field('show_education');
            if (!$show) return;

            if (have_rows('education')) : ?>
                <div class="education">
                    <h2 class="education__title">Education</h2>

                    <ul class="education__list">
                        <?php while (have_rows('education')) : the_row();
                            $specialty_education = get_sub_field('specialty-education');
                            $educational_institution = get_sub_field('educational_institution');
                            $about_educational_institution = get_sub_field('about_educational_institution');
                            $start_and_end_of_education = get_sub_field('start_&_end_of_education');
                            $achievments = get_sub_field('achievments');
                        ?>
                            <li class="education-card">
                                <?php if ($specialty_education <> '') : ?>
                                    <h3 class="education-card__title"><?php echo $specialty_education; ?></h3>
                                <?php endif; ?>

                                <?php if ($educational_institution <> '') : ?>
                                    <span class="education-card__institution"><?php echo $educational_institution; ?></span>
                                <?php endif; ?>

                                <?php if ($start_and_end_of_education <> '') : ?>
                                    <span class="education-card__time"><?php echo $start_and_end_of_education; ?></span>
                                <?php endif; ?>

                                <?php if ($about_educational_institution <> '') : ?>
                                    <div class="education-card__about-edu-institution"><?php echo $about_educational_institution; ?></div>
                                <?php endif; ?>

                                <?php if ($achievments <> '') : ?>
                                    <div class="education-card-ach">
                                        <h4 class="education-card-ach__title">Achievments:</h4>
                                        <div class="education-card-ach__text"><?php echo $achievments; ?></div>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
        <?php endif;
        }

        show_education_block(); ?>

        <!--------------------- End of education ---------------------------->

    </div>
</section>