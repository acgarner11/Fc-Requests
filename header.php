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
    <script src="https://kit.fontawesome.com/94869052ba.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body class="leading-normal tracking-normal outer-light title" id="mode"
      style="font-family: 'Source Sans Pro', sans-serif;" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
               href="#">
                <p class="title"><?php the_field('pagetitle'); ?></p>
            </a>
            <!--Dark mode button-->
            <input type="checkbox" id="switch" onclick="function colorSwitch() {
                const x = document.getElementById('mode');
                x.classList.toggle('outer-light');
                x.classList.toggle('outer-dark');
            }
            colorSwitch()">
            <label class="fixedButton" for="switch">
                <i class="moon fas fa-moon"></i>
                <i class="sun fas fa-sun"></i>
            </label>

        </div>
        <!--Do not delete -->
        <div id="nav-content"></div>

    </div>


</div>


