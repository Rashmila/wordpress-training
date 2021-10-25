<html>
    <head>
        <title>First Wordress Site</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head();?>
</head>
<body>
    <div>
        <div id="header">
            <?php
            wp_nav_menu(array(
                'theme_location'=>'header-menu'
            ));
            ?>
        </div>
