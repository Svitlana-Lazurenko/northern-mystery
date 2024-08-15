<footer class="footer">

    <?php $text = get_field('text', 'option'); ?>
    <?php if ($text <> '') : ?>
        <div class="footer__text"><?php echo $text; ?></div>
    <?php endif; ?>

    <?php if (have_rows('contacts', 'option')) : ?>
        <div class="footer-contacts">
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
                    <a class="contacts-img-link contacts-img-link--phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/phone.svg'; ?>" alt="Phone." />
                    </a>
                <?php endif; ?>
                <?php if ($email <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--email" href="mail:<?php echo $email; ?>">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/email.svg'; ?>" alt="Email." />
                    </a>
                <?php endif; ?>
                <?php if ($skype <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--skype" href="<?php echo $skype; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/skype.svg'; ?>" alt="Skype." />
                    </a>
                <?php endif; ?>
                <?php if ($whatsapp <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--whatsapp" href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/whatsapp.svg'; ?>" alt="WhatsApp." />
                    </a>
                <?php endif; ?>
                <?php if ($telegram <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--telegram" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/telegram.svg'; ?>" alt="Telegram." />
                    </a>
                <?php endif; ?>
                <?php if ($viber <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--viber" href="<?php echo $viber; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/viber.svg'; ?>" alt="Viber." />
                    </a>
                <?php endif; ?>
                <?php if ($linkedin <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--linkedin" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/linkedin.svg'; ?>" alt="LinkedIn." />
                    </a>
                <?php endif; ?>
                <?php if ($github <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--github" href="<?php echo $github; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/github.svg'; ?>" alt="GitHub." />
                    </a>
                <?php endif; ?>
                <?php if ($facebook <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--facebook" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/facebook.svg'; ?>" alt="Facebook." />
                    </a>
                <?php endif; ?>
                <?php if ($instagram <> '') : ?>
                    <a class="contacts-img-link contacts-img-link--instagram" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
                        <img class="contacts-img" src="<?php echo get_template_directory_uri() . '/assets/svg/instagram.svg'; ?>" alt="Instagram." />
                    </a>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <p id="signature">Developed with ❤️ by <a id="signature-link" href="" target="_blank" rel="noopener noreferrer">Svitlana Lazurenko (svitlasvit)</a></p>
</footer>

<div class="menu-container js-menu-container" aria-hidden="true">
    <button type="button" class="menu-button js-close-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Close mobile menu">
        <img class="menu-button__icon" src="<?php echo get_template_directory_uri() . '/assets/svg/cross.svg'; ?>" alt="Cross." />
    </button>
    <?php
    wp_nav_menu([
        'theme_location' => "mobile_menu",
        'menu_id' => 'mobile-menu',
        'container' => 'nav',
        'container_class' => 'mobile-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]);
    ?>
</div>

<?php wp_footer(); ?>
</body>

</html>