<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Short Bio -->
    <div class="wrapper">
        <div class="hero-section">
            <div class="open-menu">
                <a  href="javascript:void(0)"><i class="fas fa-times close"></i></a>
            </div>
        </div>

        <div class="menu-container">
            <div id="logo">
                <h1><i class="far fa-address-card"></i> Short bio</h1>
            </div>

            <div class="text">

                
                <p>I love mountains. I am a big-time sucker for making and capturing moments as I go. Being a
                    photographer was not something I dreamt of when I was 7. The yearning to communicate my feelings on
                    wilderness began in 2015.

                </p>
            </div>
        </div>
    </div>

    <!-- Respnsive Nav -->
    <div class="wrapper-nav">
        <div class="hero-section-nav">
            <div class="open-menu-nav">
                <a  href="javascript:void(0)"><i class="fas fa-times close"></i></a>
            </div>
        </div>

        <div class="menu-container-nav">
            <nav id="nav">
                <ul>
                    <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('/books'); ?>">Books I've read</a></li>
                    <li><a href="<?php echo site_url('/contact'); ?>">Let's talk</a></li>
                    <li class="sm"><a href="#"><i class="fas fa-envelope"></i></a></li>
                    <li class="sm"><a href="https://www.goodreads.com/user/show/11850520-djordje"><i class="fab fa-goodreads"></i></a></li>
                    <li class="sm"><a href="https://github.com/gliga02"><i class="fab fa-github"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="container">


    <header id="header">
        <div id="logo">
            <h1><a href="<?php echo site_url(); ?>">GLIGORIJEVIĆ</a></h1>
        </div>

        <nav id="nav">
            <ul>
                <li <?php if (is_page('home')) echo 'class="active"' ?> class="h"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li  <?php if (is_page('about')) echo 'class="active"' ?> class="h"><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li <?php if (is_page('books')) echo 'class="active"' ?> class="h"><a href="<?php echo site_url('/books'); ?>">Books I've read</a></li>
                <li <?php if (is_page('contact')) echo 'class="active"' ?> class="h"><a href="<?php echo site_url('/contact'); ?>">Let's talk</a></li>
                <li class="h"><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li class="h"><a href="https://www.goodreads.com/user/show/11850520-djordje"><i class="fab fa-goodreads"></i></a></li>
                <li class="h"><a href="https://github.com/gliga02"><i class="fab fa-github"></i></a></li>
                <li><a class="open" href="javascript:void(0)"><i class="fas fa-ellipsis-h"></i></a></li>
                <li><a class="open-nav" href="javascript:void(0)"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>

    </div>

