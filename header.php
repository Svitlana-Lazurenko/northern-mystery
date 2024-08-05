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
                <a class="logo" href="<?php echo home_url(); ?>">
                    <img class="logo__img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
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

            <button type="button" class="menu-button js-open-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open mobile menu">
                <img class="menu-button__icon" src="<?php echo get_template_directory_uri() . '/assets/svg/menu-hamburger.svg'; ?>" alt="Menu-hamburger." />
            </button>

        </div>
    </header>