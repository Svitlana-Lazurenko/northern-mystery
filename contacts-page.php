<?php
/*
Template Name: Contacts Page
Template Post Type: page
*/

get_header(); ?>

<main>
    <section class="contacts">
        <div class="container">
            <h1 class="contacts__title">Contacts</h1>
            <p class="contacts__call">Do you have a question or proposal for cooperation? Contact me 😊</p>

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
                            <?php $whatsapp = get_sub_field('whatsapp'); ?>
                            <?php $telegram = get_sub_field('telegram'); ?>
                            <?php $viber = get_sub_field('viber'); ?>

                            <?php if ($phone <> '') : ?>
                                <a class="contacts__contact" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/phone.svg'; ?>" alt="Phone." /><?php echo $phone ?></a>
                            <?php endif; ?>
                            <?php if ($email <> '') : ?>
                                <a class="contacts__contact" href="mail:<?php echo $email; ?>"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/email.svg'; ?>" alt="Email." /><?php echo $email; ?></a>
                            <?php endif; ?>
                            <?php if ($skype <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $skype; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/skype.svg'; ?>" alt="Skype." />Skype</a>
                            <?php endif; ?>
                            <?php if ($whatsapp <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/whatsapp.svg'; ?>" alt="WhatsUp." />WhatsApp</a>
                            <?php endif; ?>
                            <?php if ($telegram <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/telegram.svg'; ?>" alt="Telegram." />Telegram</a>
                            <?php endif; ?>
                            <?php if ($viber <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $viber; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/viber.svg'; ?>" alt="Viber." />Viber</a>
                            <?php endif; ?>
                            <?php if ($linkedin <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/linkedin.svg'; ?>" alt="LinkedIn." />LinkedIn</a>
                            <?php endif; ?>
                            <?php if ($github <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $github; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/github.svg'; ?>" alt="GitHub." />GitHub</a>
                            <?php endif; ?>
                            <?php if ($facebook <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/facebook.svg'; ?>" alt="Facebook." />Facebook</a>
                            <?php endif; ?>
                            <?php if ($instagram <> '') : ?>
                                <a class="contacts__contact" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer"><img class="contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/instagram.svg'; ?>" alt="Instagram." />Instagram</a>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <?php echo apply_shortcodes('[contact-form-7 id="30d47f5" title="Contact form" html_class="contact-form"]') ?>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>