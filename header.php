<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="container">

            <?php $logo = get_field('logo', 'option'); ?>
            <?php if ($logo <> '') : ?>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="logo__img" />
                </a>
            <?php endif; ?>

            <?php
            wp_nav_menu([
                'theme_location' => "header_menu",
                'menu_id' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'header-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);
            ?>

            <button type="button" class="menu-button js-open-menu" aria-expanded="false" aria-controls="mobile-menu">Open</button>

        </div>
    </header>