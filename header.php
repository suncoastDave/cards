<?php //adapted from https://www.youtube.com/watch?v=XKehq1w4vfg ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<link rel="icon" href="http://prescriptiondotcards.local/wp-content/uploads/2021/12/favicon.png">
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/23330c772f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body <?php body_class() ?> >
<header class="header logo-container">
    <div class="overlay has-fade"></div>
<nav class="flex flex-jc-sb flex-ai-c">
    <a href="<?php echo site_url() ?>" class="header__logo">
    <img src="<?php echo get_theme_file_uri('/img/prescriptionDotcards-logo.png') ?>" alt="prescription.cards
    logo"/></a>

    <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop container">
    <span></span>
    <span></span>
    <span></span>
    </a>

    <div class="header__links container hide-for-mobile">
        <a href="<?php echo site_url() ?>">Home</a>
        <a href="<?php echo site_url('/blog') ?>">Blog</a>
        <a href="<?php echo site_url('/card') ?>">Card</a>
        <a href="<?php echo site_url('/pharmacies') ?>">Pharmacies</a>
    </div>
</nav>

<div class="header__menu has-fade">
<a href="<?php echo site_url('/') ?>">Home</a>
        <a href="<?php echo site_url('/blog') ?>">Blog</a>
        <a href="<?php echo site_url('/card') ?>">Card</a>
        <a href="<?php echo site_url('/pharmacies') ?>">Pharmacies</a>
</div>

</header>
<main class="main-container">
