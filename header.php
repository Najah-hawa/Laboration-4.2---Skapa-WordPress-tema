<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Bilder/favicon.ico">
    <title> <?php bloginfo('name');?> </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>   
    </header>
    <header id="header">
    <div id="logo-div">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/Bilder/logotyp.png" alt="ett logotyp för företaget SEE" onclick="toggleNav()">                                                                   
        <h1 id="SEE_namn">SEE Bilförsäljning AB</h1>
    </div>
    <nav id="nav">
    <?php  wp_nav_menu(array('theme_location' => 'main-nav'));?>
    </nav>
    </header>

    <!-- Main content -->
<main>
      