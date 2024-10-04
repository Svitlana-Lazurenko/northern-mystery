<?php
if (!defined('ABSPATH')) exit; ?>

<section class="documents">
    <div class="container">

        <!--------------------------Diplomas with switch------------------------------>

        <?php
        function show_diplomas_block()
        {
            $show = get_field('show_diplomas');
            if (!$show) return;

            if (have_rows('diplomas')) : ?>
                <div class="diplomas">
                    <h2 class="documents__title">Diplomas</h2>
                    <ul class="documents__list">
                        <?php while (have_rows('diplomas')) : the_row();
                            $diploma = get_sub_field('file_of_diploma');
                            $diploma_caption = $diploma['caption'];
                            $diploma_specialty = get_sub_field('diploma-specialty');
                            $diploma_institution = get_sub_field('diploma-institution');
                        ?>
                            <li class="document">
                                <?php if ($diploma <> '' && $diploma_caption <> '') : ?>
                                    <div class="document__img-wrapper">
                                        <?php echo wp_get_attachment_image($diploma['id'], 'medium', false, array('class' => 'document__img', 'alt' => $diploma_caption)); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($diploma_specialty <> '') : ?>
                                    <span class="document__name"><?php echo $diploma_specialty; ?></span>
                                <?php endif; ?>

                                <?php if ($diploma_institution <> '') : ?>
                                    <span class="document__institution"><?php echo $diploma_institution; ?></span>
                                <?php endif; ?>

                                <?php if ($diploma <> '') : ?>
                                    <a class="btn btn--secondary" download href="<?php echo $diploma['url']; ?>">Download</a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
        <?php endif;
        }

        show_diplomas_block(); ?>

        <!------------------------------Separator------------------------------------>

        <?php
        function show_separator()
        {
            $show_diplomas = get_field('show_diplomas');
            $show_certificates = get_field('show_certificates');

            if ($show_diplomas && $show_certificates): ?>
                <div class="documents__separator"></div>
        <?php endif;
        }

        show_separator(); ?>

        <!--------------------------Certificates with switch------------------------------>

        <?php
        function show_certificates_block()
        {
            $show = get_field('show_certificates');
            if (!$show) return;

            if (have_rows('certificates')) : ?>
                <div class="certificates">
                    <h2 class="documents__title">Certificates</h2>
                    <ul class="documents__list">
                        <?php while (have_rows('certificates')) : the_row();
                            $certificate = get_sub_field('file_of_certificate');
                            $certificate_caption = $certificate['caption'];
                            $certificate_specialty = get_sub_field('certificate-specialty');
                            $certificate_institution = get_sub_field('certificate-institution');
                        ?>
                            <li class="document">
                                <?php if ($certificate <> '' && $certificate_caption <> '') : ?>
                                    <div class="document__img-wrapper">
                                        <?php echo wp_get_attachment_image($certificate['id'], 'medium', false, array('class' => 'document__img', 'alt' => $certificate_caption)); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($certificate_specialty <> '') : ?>
                                    <span class="document__name"><?php echo $certificate_specialty; ?></span>
                                <?php endif; ?>

                                <?php if ($certificate_institution <> '') : ?>
                                    <span class="document__institution"><?php echo $certificate_institution; ?></span>
                                <?php endif; ?>

                                <?php if ($certificate <> '') : ?>
                                    <a class="btn btn--secondary" download href="<?php echo $certificate['url']; ?>">Download</a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
        <?php endif;
        }

        show_certificates_block(); ?>

    </div>
</section>