<section class="experience">
    <div class="container">

        <!--------------------- Work experience ---------------------------->
        <div class="work-experience">
            <?php if (have_rows('work_experience')) : ?>
                <h2 class="work-experience__title">Work experience</h2>
                <ul class="work-experience__list">
                    <?php while (have_rows('work_experience')) : the_row(); ?>
                        <?php
                        $position = get_sub_field('position');
                        $place_of_work = get_sub_field('place_of_work');
                        $start_and_end_of_work = get_sub_field('start_&_end_of_work');
                        ?>
                        <li class="work-experience-card">
                            <?php if ($position <> '') : ?>
                                <h3 class="work-experience-card__title"><?php echo $position; ?></h3>
                            <?php endif; ?>

                            <?php if ($place_of_work <> '') : ?>
                                <span class="work-experience-card__place"><?php echo $place_of_work; ?></span>
                            <?php endif; ?>

                            <?php if ($start_and_end_of_work <> '') : ?>
                                <span class="work-experience-card__time"><?php echo $start_and_end_of_work; ?></span>
                            <?php endif; ?>

                            <div class="work-experience-card-ach">
                                <?php if (have_rows('responsibilities_&_achievements')) : ?>
                                    <h4 class="work-experience-card-ach__title">Responsibilities and achievements:</h4>
                                    <ul class="work-experience-card-ach__list">
                                        <?php while (have_rows('responsibilities_&_achievements')) : the_row(); ?>
                                            <?php $resp_or_ach = get_sub_field('responsibility_or_achievement'); ?>
                                            <?php if ($resp_or_ach <> '') : ?>
                                                <li class="work-experience-card-ach__item"><?php echo $resp_or_ach; ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        </li>
                </ul>
            <?php endif; ?>
        </div>
        <!--------------------- End of work experience ---------------------------->

        <!--------------------- Education with switch ---------------------------->
        <div class="education">
            <?php
            function show_education_block()
            {
                $show = get_field('show_education');
                if (!$show) return;

                if (have_rows('education')) : ?>
                    <h2 class="education__title">Education</h2>

                    <ul class="education__list">
                        <?php while (have_rows('education')) : the_row();
                            $specialty_education = get_sub_field('specialty-education');
                            $educational_institution = get_sub_field('educational_institution');
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

                                <div class="education-card-ach">
                                    <?php if ($achievments <> '') : ?>
                                        <h4 class="education-card-ach__title">Achievments:</h4>
                                        <p class="education-card-ach__text"><?php echo $achievments; ?></p>
                                    <?php endif; ?>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    </ul>
            <?php endif;
            }

            show_education_block(); ?>
        </div>
        <!--------------------- End of education ---------------------------->

    </div>
</section>