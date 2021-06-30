<?php
/**
 * The header for this theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpack-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/aa36ddf53c.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<!--<body class="leading-normal tracking-normal"-->
<!--      style="font-family: 'Source Sans Pro', sans-serif;" --><?php //body_class(); ?><!-->-->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/94869052ba.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body class="leading-normal tracking-normal text-black"
      style="font-family: 'Source Sans Pro', sans-serif;" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="site-branding">

        </div>


        <nav id="header" class="fixed w-full z-30 top-0 bg-white">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center">
                    <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                       href="#">

                        <p><?php the_field('pagetitle'); ?></p>
                    </a>
                </div>
                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle"
                            class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                </div>
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                     id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">

                    </ul>
                    <button
                            id="navAction"
                            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                    >
                        Action
                    </button>
<!--                    <div id = "mode" class="outer-light">-->
<!--                        <div class="title">-->
<!--                            <input type="checkbox" id="switch" onclick="colorSwitch()" />-->
<!--                            <label for="switch">Toggle</label>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </nav>


    </header><!-- #masthead -->


    <?php wp_body_open(); ?>

    <?php //wp_nav_menu( array(
    //    'theme_location' => 'header-menu',
    //    'walker' => new Description_Walker()
    //) ); ?>

