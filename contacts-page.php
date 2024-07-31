<?php
/*
Template Name: Contacts Page
Template Post Type: page
*/

get_header(); ?>

<section class="contacts">
    <div class="container">
        <h1 class="contacts__title">Contacts</h1>

        <div class="contacts__wrapper">
            <?php if (have_rows('contacts', 'option')) : ?>
                <div class="contacts__contacts">
                    <?php while (have_rows('contacts', 'option')) : the_row(); ?>
                        <?php $phone = get_sub_field('phone'); ?>
                        <?php $email = get_sub_field('email'); ?>
                        <?php $linkedin = get_sub_field('linkedin'); ?>
                        <?php $github = get_sub_field('github'); ?>
                        <?php $facebook = get_sub_field('facebook'); ?>
                        <?php $instagram = get_sub_field('instagram'); ?>
                        <?php $skype = get_sub_field('skype'); ?>
                        <?php $whatsup = get_sub_field('whatsup'); ?>
                        <?php $telegram = get_sub_field('telegram'); ?>
                        <?php $viber = get_sub_field('viber'); ?>

                        <?php if ($phone <> '') : ?>
                            <a class="contacts__contact" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/phone.svg'; ?>" alt="phone" /><?php echo $phone ?></a>
                        <?php endif; ?>
                        <?php if ($email <> '') : ?>
                            <a class="contacts__contact" href="mail:<?php echo $email; ?>"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/email.svg'; ?>" alt="email" /><?php echo $email; ?></a>
                        <?php endif; ?>
                        <?php if ($linkedin <> '') : ?>
                            <a class="contacts__contact" href="<?php $linkedin; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/linkedin.svg'; ?>" alt="linkedin" />LinkedIn</a>
                        <?php endif; ?>
                        <?php if ($github <> '') : ?>
                            <a class="contacts__contact" href="<?php $github; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/github.svg'; ?>" alt="github" />GitHub</a>
                        <?php endif; ?>
                        <?php if ($facebook <> '') : ?>
                            <a class="contacts__contact" href="<?php $facebook; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/facebook.svg'; ?>" alt="facebook" />Facebook</a>
                        <?php endif; ?>
                        <?php if ($instagram <> '') : ?>
                            <a class="contacts__contact" href="<?php $instagram; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/instagram.svg'; ?>" alt="instagram" />Instagram</a>
                        <?php endif; ?>
                        <?php if ($skype <> '') : ?>
                            <a class="contacts__contact" href="<?php $skype; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/skype.svg'; ?>" alt="skype" />Skype</a>
                        <?php endif; ?>
                        <?php if ($whatsup <> '') : ?>
                            <a class="contacts__contact" href="<?php $whatsup; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/whatsup.svg'; ?>" alt="whatsup" />WhatsUp</a>
                        <?php endif; ?>
                        <?php if ($telegram <> '') : ?>
                            <a class="contacts__contact" href="<?php $telegram; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/telegram.svg'; ?>" alt="telegram" />Telegram</a>
                        <?php endif; ?>
                        <?php if ($viber <> '') : ?>
                            <a class="contacts__contact" href="<?php $viber; ?>" target="_blank" rel="noopener noreferrer nofollow"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/viber.svg'; ?>" alt="viber" />Viber</a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php echo apply_shortcodes('[contact-form-7 id="30d47f5" title="Contact form" html_class="contact-form"]') ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>