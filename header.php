<!DOCTYPE html>
<html <?php language_attributes() ; ?>>
<head>
    <meta charset="<?php bloginfo( 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Unified Champions</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>
<body>
 <header>
<nav class="header-fixed">
 <a href="/projetS3"><img src="http://localhost/projetS3/wp-content/uploads/2023/10/Logo_White.png" alt="logo unified champions" class="logo-header"></a> 
    <nav>
        <?php wp_nav_menu( array ('theme_location' => 'main') ); ?>
    </nav>
</nav>

 </header>
