<footer>
    <?php $text = get_field('text', 'option'); ?>
    <?php if ($text <> '') : ?>
        <div><?php echo $text; ?></div>
    <?php endif; ?>

    <?php if (have_rows('contacts', 'option')) : ?>
        <div class="">
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
                    <a class="" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', $phone); ?>"><?php echo $phone ?></a>
                <?php endif; ?>
                <?php if ($email <> '') : ?>
                    <a class="" href="mail:<?php echo $email; ?>"><?php echo $email; ?></a>
                <?php endif; ?>
                <?php if ($linkedin <> '') : ?>
                    <a class="" href="<?php $linkedin; ?>">LinkedIn</a>
                <?php endif; ?>
                <?php if ($github <> '') : ?>
                    <a class="" href="<?php $github; ?>">GitHub</a>
                <?php endif; ?>
                <?php if ($facebook <> '') : ?>
                    <a class="" href="<?php $facebook; ?>">Facebook</a>
                <?php endif; ?>
                <?php if ($instagram <> '') : ?>
                    <a class="" href="<?php $instagram; ?>">Instagram</a>
                <?php endif; ?>
                <?php if ($skype <> '') : ?>
                    <a class="" href="<?php $skype; ?>">Skype</a>
                <?php endif; ?>
                <?php if ($whatsup <> '') : ?>
                    <a class="" href="<?php $whatsup; ?>">WhatsUp</a>
                <?php endif; ?>
                <?php if ($telegram <> '') : ?>
                    <a class="" href="<?php $telegram; ?>">Telegram</a>
                <?php endif; ?>
                <?php if ($viber <> '') : ?>
                    <a class="" href="<?php $viber; ?>">Viber</a>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>