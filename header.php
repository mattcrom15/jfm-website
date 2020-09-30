<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JFM - Work</title>

    <?php wp_head();?>
</head>
<body>
<header>
<a href="<?php echo get_home_url();?>"><img class="logo" src="http://jfm-website.test/wp-content/uploads/2020/09/jfm-logo_240920.png" alt="" srcset=""></a>
<img src="http://jfm-website.test/wp-content/themes/JFM-Theme-2020/images/menu.svg" alt="" class="hamburger">
<img src="http://jfm-website.test/wp-content/themes/JFM-Theme-2020/images/x.svg" alt="" class="close-ico">
<nav>
            <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
            )
        );
        ?>
      </nav>

</header>