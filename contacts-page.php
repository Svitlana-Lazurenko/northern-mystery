<?php
if (!defined('ABSPATH')) exit; ?>

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
                            <?php $djinni = get_sub_field('djinni'); ?>
                            <?php $github = get_sub_field('github'); ?>
                            <?php $facebook = get_sub_field('facebook'); ?>
                            <?php $instagram = get_sub_field('instagram'); ?>
                            <?php $skype = get_sub_field('skype'); ?>
                            <?php $whatsapp = get_sub_field('whatsapp'); ?>
                            <?php $telegram = get_sub_field('telegram'); ?>
                            <?php $viber = get_sub_field('viber'); ?>

                            <?php if ($phone <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/phone.svg'; ?>" alt="Phone." />
                                    </a>
                                    <a class="contacts__name-link" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>">
                                        <span class="contacts__name"><?php echo $phone; ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($email <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link  contacts-img-link--email" href="mail:<?php echo $email; ?>">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/email.svg'; ?>" alt="Email." />
                                    </a>
                                    <a class="contacts__name-link" href="mail:<?php echo $email; ?>">
                                        <span class="contacts__name"><?php echo $email; ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($skype <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--skype" href="<?php echo $skype; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/skype.svg'; ?>" alt="Skype." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $skype; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Skype</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($whatsapp <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link  contacts-img-link--whatsapp" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/whatsapp.svg'; ?>" alt="WhatsUp." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">WhatsApp</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($telegram <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--telegram" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/telegram.svg'; ?>" alt="Telegram." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Telegram</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($viber <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--viber" href="<?php echo $viber; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/viber.svg'; ?>" alt="Viber." />
                                    </a>
                                    <a class="contacts__cname-link href=" <?php echo $viber; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Viber</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($linkedin <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--linkedin" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/linkedin.svg'; ?>" alt="LinkedIn." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">LinkedIn</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($djinni <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--djinni" href="<?php echo $djinni; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/djinni.svg'; ?>" alt="Djinni." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $djinni; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Djinni</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($github <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--github" href="<?php echo $github; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/github.svg'; ?>" alt="GitHub." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $github; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">GitHub</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($facebook <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--facebook" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/facebook.svg'; ?>" alt="Facebook." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Facebook</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if ($instagram <> '') : ?>
                                <div class="contacts__contact-wrapper">
                                    <a class="contacts-img-link contacts-img-link--instagram" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
                                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/instagram.svg'; ?>" alt="Instagram." />
                                    </a>
                                    <a class="contacts__name-link" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="contacts__name">Instagram</span>
                                    </a>
                                </div>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <?php // Shortcode for Contact Form 7 
                ?>
                <?php // echo apply_shortcodes('[contact-form-7 id="" title="" html_class="contact-form"]') 
                ?>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>