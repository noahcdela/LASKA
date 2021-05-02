<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Band,Music,Americana,Desert Rock,Songs,Vocalists,Live Music,Violin,guitar,banjo,mandolin,ukulele,cello">
    <meta name="author" content="Noah Delagardelle">
    <?php wp_head();?>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://laskatheband.com">
    <meta property="og:title" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="images/portrait.JPG">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:site_name" content="Laska">
    <meta property="twitter:image:alt" content="Band members Bex, Hannah and Mookie Morton of Laska">
    <meta property="twitter:card" content="summary_large_image">
</head>

<body <?php body_class();?> id="page-top">

    <header class="header">
        <nav class="nav">
            <ul class="nav-ul">
                <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo home_url(); ?>">Home</a></li>
                <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo site_url('/about'); ?>">About</a></li>
                <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo site_url('/music'); ?>">Music</a></li>
                <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo home_url(); ?>#shows">Shows</a></li>
                <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo site_url('/videos'); ?>">Videos</a></li>
                <!-- <li class="nav-li"><a class="nav-a page-scroll" href="<?php echo site_url('/lyrics'); ?>">Lyrics</a></li> -->
                <li class="nav-li"><a class="nav-a page-scroll" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>