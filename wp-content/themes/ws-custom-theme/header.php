
<!-- To call css and image
    <?php echo get_template_directory_uri(); ?>/style.css
<img src="<?php bloginfo('template_directory') ?>/image/foldername -->
 

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
            // Display the site logo or title
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
            }

            // Display the navigation menu 
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,
                'menu_class' => 'menu',
            ));
            ?>
        </nav>
    </header>