<footer class="footer">

    <?php $text = get_field('text', 'option'); ?>
    <?php if ($text <> '') : ?>
        <div class="footer__text"><?php echo $text; ?></div>
    <?php endif; ?>

    <?php if (have_rows('contacts', 'option')) : ?>
        <div class="footer__contacts">
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
                    <a class="footer-contacts__contact" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/phone.svg'; ?>" alt="Phone." /><?php echo $phone ?></a>
                <?php endif; ?>
                <?php if ($email <> '') : ?>
                    <a class="footer-contacts__contact" href="mail:<?php echo $email; ?>"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/email.svg'; ?>" alt="Email." /><?php echo $email; ?></a>
                <?php endif; ?>
                <?php if ($skype <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $skype; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/skype.svg'; ?>" alt="Skype." />Skype</a>
                <?php endif; ?>
                <?php if ($whatsup <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $whatsup; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/whatsup.svg'; ?>" alt="WhatsUp." />WhatsUp</a>
                <?php endif; ?>
                <?php if ($telegram <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $telegram; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/telegram.svg'; ?>" alt="Telegram." />Telegram</a>
                <?php endif; ?>
                <?php if ($viber <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $viber; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/viber.svg'; ?>" alt="Viber." />Viber</a>
                <?php endif; ?>
                <?php if ($linkedin <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/linkedin.svg'; ?>" alt="LinkedIn." />LinkedIn</a>
                <?php endif; ?>
                <?php if ($github <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $github; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/github.svg'; ?>" alt="GitHub." />GitHub</a>
                <?php endif; ?>
                <?php if ($facebook <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/facebook.svg'; ?>" alt="Facebook." />Facebook</a>
                <?php endif; ?>
                <?php if ($instagram <> '') : ?>
                    <a class="footer-contacts__contact" href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer"><img class="footer-contacts__img" src="<?php echo get_template_directory_uri() . '/assets/svg/instagram.svg'; ?>" alt="Instagram." />Instagram</a>
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